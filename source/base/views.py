import requests

from django.conf import settings
from django.shortcuts import redirect
from django.views.generic import ListView, View

from haystack.views import SearchView
from source.articles.models import Article
from source.articles.views import ArticleList
from source.code.models import Code
from source.guides.models import get_random_guides
from source.jobs.models import get_recent_jobs
from source.people.models import Organization, Person
from source.utils.json import render_json_to_response


class HomepageView(ListView):
    model = Article
    template_name = '_v2/homepage.html'

    def get_promo_article(self):
        promo_article = Article.live_objects.filter(show_in_lists=True, is_featured=True).latest()
        
        return promo_article
        
    def get_queryset(self):
        promo_article = self.get_promo_article()
        queryset = Article.live_objects.filter(show_in_lists=True).exclude(id=promo_article.id)[:9]
            
        return queryset
    
    def get_context_data(self, **kwargs):
        context = super(HomepageView, self).get_context_data(**kwargs)
        
        context['promo_article'] = self.get_promo_article()
        context['recent_jobs'] = get_recent_jobs(3)
        context['random_guides'] = get_random_guides(3)
        
        return context

class SourceSearchView(SearchView):
    template = "_v2/search/search.html"
    
    def get_results(self):
        '''
        Limit primary search results to Article matches.
        Template gets Person and Organization matches separately,
        via `get_secondary_results`.
        '''
        results = self.form.search().models(Article).order_by('-pubdate')
        return results
    
    def get_code_results(self):
        '''
        Get Code matches for separate handling on template.
        '''
        code_results = self.form.search().models(Code).order_by('name')
        return code_results

    def get_person_results(self):
        '''
        Get Person matches for separate handling on template.
        '''
        person_results = self.form.search().models(Person).order_by('first_name')
        return person_results

    def get_organization_results(self):
        '''
        Get Organization matches for separate handling on template.
        '''
        organization_results = self.form.search().models(Organization).order_by('name')
        return organization_results
    
    def extra_context(self):
        page_context = {}
        
        if self.query:
            page_context.update({
                'code_results': self.get_code_results(),
                'person_results': self.get_person_results(),
                'organization_results': self.get_organization_results()
            })
        
        return page_context

class L10NRedirectView(View):
    '''
    Original Mozilla Playdoh framework forced en-US URLs. Now that we
    no longer use them, this view handles redirects for old inbound links.
    '''
    def get(self, request, *args, **kwargs):
        new_url = request.get_full_path().lower().replace('/en-us','',1)

        return redirect(new_url, permanent=True)

class SlackMessageView(View):
    def post(self, request, *args, **kwargs):
        message = request.POST.get('message', None)
        channel = request.POST.get('channel', None)
        auth_token = getattr(settings, 'SLACK_TOKEN', None)
        
        if message and auth_token:
            endpoint = 'https://membot.herokuapp.com/message/inbound/'
            data = {
                'message': message,
                'channel': channel,
                'token': auth_token
            }
            r = requests.post(endpoint, data=data)
            result = 'success'
        else:
            result = 'failure'
        
        return render_json_to_response({'text': result})
