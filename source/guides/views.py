from django.conf import settings
from django.core.urlresolvers import reverse
from django.shortcuts import render
from django.template.loader import render_to_string
from django.views.generic import ListView, DetailView, View
from django.views.generic.edit import FormView

from .forms import SuggestGuideForm
from .models import Guide
from source.utils.email import send_multipart_email


class GuideList(ListView):
    model = Guide
    template_name = "guides/_v2/guide_list.html"

    def dispatch(self, *args, **kwargs):
        self.render_json = kwargs.get('render_json', False)
        return super(GuideList, self).dispatch(*args, **kwargs)

    def get_queryset(self):
        queryset = Guide.live_objects.all()

        return queryset

    def get_context_data(self, **kwargs):
        context = super(GuideList, self).get_context_data(**kwargs)
        context['active_nav'] = 'Guides'
        context['rss_link'] = reverse('guide_list_feed')

        return context


class GuideDetail(DetailView):
    model = Guide
    template_name = "guides/_v2/guide_detail.html"

    def get_queryset(self):
        if self.request.user.is_staff:
            # allow preview for logged-in editors
            queryset = Guide.objects.prefetch_related('guidearticle_set')
        else:
            queryset = Guide.live_objects.prefetch_related('guidearticle_set')
        
        return queryset


class GuideSuggestGuide(FormView):
    '''
    Readers can suggest a Guide to add to the Guide list, generating
    an email to the editorial team.
    '''
    template_name = "guides/_v2/suggest_guide.html"
    form_class = SuggestGuideForm
    
    def form_valid(self, form, **kwargs):
        context = self.get_context_data(**kwargs)
        
        data=form.cleaned_data
        
        email_context = {
            'data': data
        }
    
        # render text and html versions of email body
        # both plain txt for now
        text_content = render_to_string(
            'guides/_v2/emails/suggest_guide.txt',
            email_context,
        )
        html_content = render_to_string(
            'guides/_v2/emails/suggest_guide.html',
            email_context
        )

        send_multipart_email(
            subject = 'Source: Guide suggestion from a reader',
            from_email = settings.DEFAULT_FROM_EMAIL,
            to = settings.EDITORIAL_EMAIL,
            text_content = text_content,
            html_content = html_content
        )

        context.update({'success': 'True'})

        return render(self.request, self.template_name, context)
