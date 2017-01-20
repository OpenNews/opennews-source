from django.conf import settings
from django.core.urlresolvers import reverse
from django.shortcuts import get_object_or_404, render
from django.template import RequestContext
from django.views.generic import ListView, DetailView

from .models import Code
from source.tags.utils import filter_queryset_by_tags
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
        
        featured_repos = Code.live_objects.filter(is_featured=True).order_by('?')
        try:
            featured_repos = featured_repos[:3]
        except:
            featured_repos = None
        context['featured_repos'] = featured_repos

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
