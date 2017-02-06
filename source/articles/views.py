from django.conf import settings
from django.core.urlresolvers import reverse
from django.http import Http404, HttpResponseRedirect
from django.shortcuts import get_object_or_404, render, redirect
from django.template.loader import render_to_string
from django.views.generic import ListView, DetailView, View
from django.views.generic.edit import FormView

from .forms import SuggestArticleForm
from .models import Article, Section, Category
from source.code.models import get_recent_repos
from source.jobs.models import get_recent_jobs
from source.tags.utils import filter_queryset_by_tags
from source.utils.email import send_multipart_email
from source.utils.pagination import paginate

class ArticleList(ListView):
    model = Article
    template_name = 'articles/_v2/article_list.html'
    section = None
    category = None
    
    def dispatch(self, *args, **kwargs):
        self.category_kwarg = kwargs.get('category', None)
        if self.category_kwarg:
            self.category = get_object_or_404(Category, slug=self.category_kwarg)

        self.tag_slugs = kwargs.get('tag_slugs', None)
        self.tags = []
        
        return super(ArticleList, self).dispatch(*args, **kwargs)

    def get_template_names(self):
        template_list = [self.template_name]
            
        return template_list
        
    def get_queryset(self):
        queryset = Article.live_objects.filter(show_in_lists=True).prefetch_related('authors', 'people', 'organizations')

        if self.category:
            queryset = queryset.filter(category=self.category)
        elif self.tag_slugs:
            queryset, self.tags = filter_queryset_by_tags(queryset, self.tag_slugs, self.tags)
            
        return queryset
    
    def get_section_links(self, context):
        if self.category:
            context.update({
                'category': self.category,
                'section': self.category.section,
                #'active_nav': self.category.section.slug,
                'rss_link': reverse('article_list_by_category_feed', kwargs={'category': self.category.slug}),
            })
        elif self.tags:
            context.update({
                'tags': self.tags,
                'rss_link': reverse('article_list_by_tag_feed', kwargs={'tag_slugs': self.tag_slugs}),
            })
        else:
            context.update({
                'rss_link': reverse('homepage_feed'),
            })
        
        return ''

    def paginate_list(self, context):
        page, paginator = paginate(self.request, self.object_list, 20)
        context.update({
            'page': page,
            'paginator': paginator
        })
        
        return ''
        
    def get_promo_items(self, context, num_items):
        _page = context.get('page', None)
        
        # Only get promo items for the first page of a paginated section
        if _page and _page.number == 1:
            '''
            Take the most recent three items from this section's list
            of articles. Pop the first item for a `lead_promo` object.
            Stash the rest in a `secondary_promos` list. Also generate
            a set of pks to ignore when we iterate through the main
            headline list.
            '''
            promo_list = self.get_queryset()[:num_items]
            lead_promo = None
            secondary_promos = None
            if promo_list:
                lead_promo = promo_list[0]
                secondary_promos = promo_list[1:]

            context.update({
                'lead_promo': lead_promo,
                'secondary_promos': secondary_promos,
                'articles_to_exclude_from_list': [promo.pk for promo in promo_list]
            })
        
    def get_standard_context(self, context):
        self.get_section_links(context)
        self.paginate_list(context)
        
        return ''
        
    def get_context_data(self, **kwargs):
        context = super(ArticleList, self).get_context_data(**kwargs)
        self.get_standard_context(context)

        context['recent_jobs'] = get_recent_jobs(2)
        context['recent_repos'] = get_recent_repos(3)
        
        return context


class ArticleDetail(DetailView):
    model = Article
    template_name = 'articles/_v2/article_detail.html'

    def get_queryset(self):
        if self.request.user.is_staff:
            # simple method for allowing article preview for editors,
            # bypassing `live_objects` check on detail view. List pages
            # populate with public articles only, but admin user can hit
            # "view on site" button to see article even if it's not live yet
            queryset = Article.objects.all()
        else:
            queryset = Article.live_objects.all()
        
        queryset = queryset.prefetch_related('articleblock_set', 'authors', 'people', 'organizations', 'code')
        
        return queryset

    def get_context_data(self, **kwargs):
        context = super(ArticleDetail, self).get_context_data(**kwargs)
        
        recent_articles = Article.live_objects.exclude(id=self.object.id).order_by('-pubdate')[:3]

        context.update({
            'section': self.object.section,
            'recent_articles': recent_articles,
        })

        return context


class ArticleRedirectView(View):
    '''
    No longer splitting articles out into individual sections.
    '''
    def get(self, request, *args, **kwargs):
        slug = kwargs['slug']
        new_url = reverse('article_detail', kwargs={'slug': slug})

        return redirect(new_url, permanent=True)


class ArticleSuggestArticle(FormView):
    '''
    Readers can submit an Article pitch, generating
    an email to the editorial team.
    '''
    template_name = "articles/_v2/suggest_article.html"
    form_class = SuggestArticleForm
    
    def form_valid(self, form, **kwargs):
        context = self.get_context_data(**kwargs)
        
        data=form.cleaned_data
        
        email_context = {
            'data': data
        }
    
        # render text and html versions of email body
        # both plain txt for now
        text_content = render_to_string(
            'articles/_v2/emails/suggest_article.txt',
            email_context,
        )
        html_content = render_to_string(
            'articles/_v2/emails/suggest_article.html',
            email_context
        )

        send_multipart_email(
            subject = 'Source: Article suggestion from a reader',
            from_email = settings.DEFAULT_FROM_EMAIL,
            to = settings.EDITORIAL_EMAIL,
            text_content = text_content,
            html_content = html_content
        )

        context.update({'success': 'True'})

        return render(self.request, self.template_name, context)
