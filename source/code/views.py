from django.conf import settings
from django.core.urlresolvers import reverse
from django.shortcuts import get_object_or_404, render
from django.template import RequestContext
from django.template.loader import render_to_string
from django.views.generic import ListView, DetailView, View

from .models import Code
from source.tags.utils import filter_queryset_by_tags
from source.utils.email import send_multipart_email
from source.utils.pagination import paginate


class CodeList(ListView):
    model = Code
    template_name = 'code/_v2/code_list.html'

    def dispatch(self, *args, **kwargs):
        self.render_json = kwargs.get('render_json', False)
        self.tag_slugs = kwargs.get('tag_slugs', None)
        self.tags = []
        return super(CodeList, self).dispatch(*args, **kwargs)

    def get_queryset(self):
        queryset = Code.live_objects.all()

        if self.tag_slugs:
            queryset, self.tags = filter_queryset_by_tags(queryset, self.tag_slugs, self.tags)

        return queryset

    def get_context_data(self, **kwargs):
        context = super(CodeList, self).get_context_data(**kwargs)
        context['active_nav'] = 'Code'
        
        # FEATURED REPOS
        featured_repos = Code.live_objects.filter(is_featured=True).order_by('?')
        try:
            featured_repos = featured_repos[:3]
        except:
            featured_repos = None
        context['featured_repos'] = featured_repos

        # RECENT REPOS
        recent_repos = Code.live_objects.order_by('-created')
        try:
            recent_repos = recent_repos[:6]
        except:
            recent_repos = None
        context['recent_repos'] = recent_repos

        if self.tags:
            context['tags'] = self.tags
            context['rss_link'] = reverse('code_list_by_tag_feed', kwargs={'tag_slugs': self.tag_slugs})
            context['json_link'] = reverse('code_list_by_tag_feed_json', kwargs={'tag_slugs': self.tag_slugs})
        else:
            context['rss_link'] = reverse('code_list_feed')
            context['json_link'] = reverse('code_list_feed_json')
        
        # No pagination required for current alpha list display
        #page, paginator = paginate(self.request, self.object_list, 50)
        #context.update({
        #    'page': page,
        #    'paginator': paginator
        #})

        return context

    def render_to_response(self, context):
        if self.render_json:
            '''
            JSON export runs through a hand-rolled template for now, so we can
            attach things like related names and urls. If we start doing more
            with providing JSON, we should definitly go full django-tastypie.
            '''
            context['HTTP_PROTOCOL'] = getattr(settings, 'HTTP_PROTOCOL', 'https')
            if 'callback' in self.request.GET:
                # provide jsonp support for requests
                # with ?callback=foo paramater
                context['jsonp_callback'] = self.request.GET['callback']
            return render(
                self.request,
                'code/code_list.json',
                context,
                content_type='application/json'
            )
        return super(CodeList, self).render_to_response(context)


class CodeDetail(DetailView):
    model = Code

    def get_queryset(self):
        queryset = Code.live_objects.prefetch_related('codelink_set', 'people', 'organizations', 'article_set')
        
        return queryset


class CodeSuggestRepo(View):
    '''
    Readers can suggest a repository to add to the Code list, generating
    an email to the editorial team.
    '''
    template_name = "code/_v2/suggest_repo.html"
    
    def get(self, request, *args, **kwargs):
        '''
        Render the suggestion form.
        '''
        context = {}
        
        return render(request, self.template_name, context)

    def post(self, request, *args, **kwargs):
        '''
        Process the submitted form, send email to editorial staff,
        give reader a success message. (Form validation happens in
        the template.)
        '''
        context = {}
        data=request.POST
        
        email_context = {
            'repo_name': data.get('repo', ''),
            'what': data.get('what', ''),
        }
        
        # render text and html versions of email body
        # both plain txt for now
        text_content = render_to_string(
            'code/_v2/emails/suggest_repo.txt',
            email_context,
        )
        html_content = render_to_string(
            'code/_v2/emails/suggest_repo.txt',
            email_context
        )

        send_multipart_email(
            subject = 'Source: Repo submission from a reader',
            from_email = settings.DEFAULT_FROM_EMAIL,
            to = settings.EDITORIAL_EMAIL,
            text_content = text_content,
            html_content = html_content
        )

        context.update({'success': 'True'})
        return render(request, self.template_name, context)
        
