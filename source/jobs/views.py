from datetime import datetime, timedelta

from django.conf import settings
from django.contrib import messages
from django.contrib.auth.decorators import login_required
from django.contrib.auth.models import User
from django.contrib.sites.shortcuts import get_current_site
from django.core.urlresolvers import reverse
from django.shortcuts import get_object_or_404, render, redirect
from django.template import RequestContext
from django.template.loader import render_to_string
from django.views.generic import ListView, DetailView, View
from django.views.generic.edit import FormView

from .forms import JobUpdateForm
from .models import Job
from source.base.helpers import dj_date
from source.people.models import Organization, OrganizationAdmin
from source.utils.caching import expire_page_cache
from source.utils.email import send_multipart_email
from source.utils.json import render_json_to_response

from sesame import utils as sesame_utils

USER_DEBUG = getattr(settings, 'USER_DEBUG', False)


class JobList(ListView):
    model = Job
    template_name = "jobs/_v2/job_list.html"

    def dispatch(self, request, *args, **kwargs):
        self.render_json = kwargs.get('render_json', False)
        self.sort = request.GET.get('sort', None)
        return super(JobList, self).dispatch(request, *args, **kwargs)

    def get_queryset(self):
        queryset = Job.live_objects.order_by('-listing_start_date', '-created')
        return queryset

    def get_context_data(self, **kwargs):
        context = super(JobList, self).get_context_data(**kwargs)
        context['active_nav'] = 'Jobs'
        context['rss_link'] = reverse('job_list_feed')
        context['json_link'] = reverse('job_list_feed_json')
        context['sort_value'] = self.sort or 'date'
        
        this_week = datetime.now().date() - timedelta(days=7)
        last_week = datetime.now().date() - timedelta(days=14)
        
        if self.sort == 'organization':
            context['jobs_by_organization'] = self.get_queryset().order_by('organization__name')
        else:
            context['jobs_this_week'] = self.get_queryset().filter(listing_start_date__gt=this_week)
            context['jobs_last_week'] = self.get_queryset().filter(listing_start_date__lte=this_week, listing_start_date__gt=last_week)
            context['jobs_previously'] = self.get_queryset().filter(listing_start_date__lte=last_week)
        
        return context

    def render_to_response(self, context):
        if self.render_json:
            jobs = []
            for job in context['object_list']:
                jobs.append({
                    'name': job.name,
                    'organization': job.organization.name,
                    'description': job.description,
                    'location': job.location,
                    'contact_name': job.contact_name,
                    'email': job.email,
                    'listed': dj_date(job.listing_start_date, 'F j, Y'),
                    'url': job.url,
                    'source_url': job.get_list_page_url,
                })
            return render_json_to_response(jobs)
        return super(JobList, self).render_to_response(context)

class JobUpdate(FormView):
    form_class = JobUpdateForm
    template_name = 'jobs/_v2/job_update.html'

    def get_success_url(self):
        return reverse('job_update')

    def get_job(self, pk=None, organization=None):
        user = self.request.user

        if (user.is_authenticated() and user.is_active):
            if pk and organization:
                # ensure that Organization admin can modify this record
                job = get_object_or_404(Job, is_live=True, pk=pk, organization=organization)
            return job
        return None

    def create_job(self, data, organization):
        data.update({
            'organization': organization
        })

        job = Job(**data)
        job.save()
        
        return job

    def update_job(self, job, data, task=None):
        if task == 'delete':
            job.delete()
            expire_page_cache(reverse('job_list'))
            form_message = 'Job listing deleted. Add a new job?'

        else:
            job_form = JobUpdateForm(instance=job, data=data)
            if job_form.is_valid():
                job_form.save()
                form_message = 'Saved!'
            else:
                error_message = ''
                for field in job_form:
                    if field.errors:
                        add_label = field.label
                        add_errors = ', '.join([error for error in field.errors])
                        error_message += '%s: %s ' % (add_label, add_errors)
                form_message = error_message

        return form_message

    def get_organization(self, user):
        if user.is_authenticated() and user.is_active:
            try:
                org_admin = OrganizationAdmin.objects.get(email__iexact=user.email, organization__is_live=True)
                return org_admin.organization
            except OrganizationAdmin.DoesNotExist:
                self.error_message = "Sorry, no Organization account found that matches your email address: {}".format(user.email)
            except OrganizationAdmin.MultipleObjectsReturned:
                self.error_message = "Uh-oh, somehow there are multiple Organization accounts attached to your email address: {}. Please contact us for cleanup.".format(user.email)
                
        return None

    def get_context_data(self, **kwargs):
        context = super(JobUpdate, self).get_context_data(**kwargs)
        request = self.request
        user = request.user
        
        if user.is_authenticated() and user.is_active:
            organization = self.get_organization(user)
                        
            if organization:
                context.update({
                    'user': request.user,
                    'organization': organization,
                    'default_job_listing_end_date': datetime.today().date() + timedelta(days=30),
                    'job': None
                })
                if 'job' in request.GET:
                    job = self.get_job(request.GET['job'], organization)
                    context.update({
                        'job': job
                    })
            else:
                context.update({
                    'error_message': self.error_message
                })
            
        return context

    def form_valid(self, form, **kwargs):
        job = form.data.get('job', None)
        task = form.data.get('task', None)
        data = form.cleaned_data
        request = self.request
        form_message = ''

        user = request.user
        organization = self.get_organization(user)

        if not job:
            job = self.create_job(data, organization)
            form_message = 'New job posted to <a href="{}">Source listings</a>. Add another?'.format(reverse('job_list'))
        else:
            job = self.get_job(job, organization)
            form_message = self.update_job(job, data, task)

        messages.success(request, form_message)
        return redirect(self.get_success_url())

class JobsSendLoginLink(View):
    def post(self, request, *args, **kwargs):
        email = request.POST.get('email')
        job_update_url = reverse('job_update')
        
        try:
            user = User.objects.get(username__iexact=email)
        except:
            # a User record is automatically created when
            # an OrganizationAdmin is added. If no User record
            # is found, the address shouldn't be logging in. 
            msg = 'Sorry, no admin account associated with this email address.'
            messages.error(request, msg)
            return redirect(job_update_url)        

        # use django-sesame to send magic login link
        site_url = '{}://{}'.format(request.scheme, get_current_site(request))
        login_token = sesame_utils.get_query_string(user)
        login_link = '{}{}{}'.format(site_url, job_update_url, login_token)
                
        msg = 'We just emailed you a login link! Please check your inbox.'
        
        email_context = {
            'site_url': site_url,
            'login_link': login_link,
        }
    
        text_content = render_to_string(
            'jobs/_v2/emails/jobs_admin_login.txt',
            email_context,
        )
        html_content = render_to_string(
            'jobs/_v2/emails/jobs_admin_login.html',
            email_context
        )

        send_multipart_email(
            subject = 'Source Jobs: Log in to your account',
            from_email = settings.DEFAULT_FROM_EMAIL,
            to = email,
            text_content = text_content,
            html_content = html_content
        )

        if request.is_ajax():
            result = {'message': msg}
            return render_json_to_response(result)

        messages.success(request, msg)
        return redirect(job_update_url)