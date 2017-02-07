from django.conf import settings
from django.conf.urls import include, url
from django.views.decorators.cache import cache_page
from django.views.generic.base import RedirectView

from .feeds import ArticleFeed
from .views import SourceSearchView, HomepageView, SlackMessageView
from haystack.forms import SearchForm
from haystack.query import SearchQuerySet
from haystack.views import search_view_factory
from source.articles.views import ArticleList, ArticleDetail, ArticleRedirectView
from source.utils.caching import ClearCache

STANDARD_CACHE_TIME = getattr(settings, 'CACHE_MIDDLEWARE_SECONDS', 60*15)
FEED_CACHE_TIME = getattr(settings, 'FEED_CACHE_SECONDS', 60*15)

BASE_URLS = [
    url(
        regex = '^$',
        view = cache_page(STANDARD_CACHE_TIME)(HomepageView.as_view()),
        kwargs = {},
        name = 'homepage',
    ),
    url(r'^articles/', include('source.articles.urls')),
    url(r'^code/', include('source.code.urls')),
    url(r'^guides/', include('source.guides.urls')),
    url(r'^jobs/', include('source.jobs.urls')),
    url(r'^community/', include('source.people.urls.community')),
    url(r'^organizations/', include('source.people.urls.organizations')),
    url(r'^people/', include('source.people.urls.people')),
    url(
        regex = '^search/$',
        view = search_view_factory(view_class=SourceSearchView, form_class=SearchForm),
        kwargs = {},
        name = 'haystack_search',
    ),
    url(
        regex = '^clear-cache/$',
        view = ClearCache.as_view(),
        kwargs = {},
        name = 'clear_cache',
    ),
    url(
        regex = '^send-to-slack/$',
        view = SlackMessageView.as_view(),
        kwargs = {},
        name = 'send_to_slack',
    ),
    url(
        regex = '^rss/$',
        view = cache_page(FEED_CACHE_TIME)(ArticleFeed()),
        kwargs = {},
        name = 'homepage_feed',
    ),
    url(
        regex = '^category/(?P<category>[-\w]+)/$',
        view = cache_page(STANDARD_CACHE_TIME)(ArticleList.as_view()),
        kwargs = {},
        name = 'article_list_by_category',
    ),
    url(
        regex = '^category/(?P<category>[-\w]+)/rss/$',
        view = cache_page(FEED_CACHE_TIME)(ArticleFeed()),
        kwargs = {},
        name = 'article_list_by_category_feed',
    ),
    # fallback for old section-based URLs
    url(
        regex = '^(?P<section>[-\w]+)/$',
        view = RedirectView.as_view(url='/articles/'),
        #view = cache_page(STANDARD_CACHE_TIME)(ArticleList.as_view()),
        kwargs = {},
        name = 'article_list_by_section',
    ),
    # leaving this in place for section-specific feeds
    url(
        regex = '^(?P<section>[-\w]+)/rss/$',
        view = cache_page(FEED_CACHE_TIME)(ArticleFeed()),
        kwargs = {},
        name = 'article_list_by_section_feed',
    ),
    url(
        regex = '^(?P<section>[-\w]+)/(?P<slug>[-\w]+)/$',
        view = ArticleRedirectView.as_view(),
        #view = cache_page(STANDARD_CACHE_TIME)(ArticleDetail.as_view()),
        kwargs = {},
        name = 'article_detail_by_section',
    ),
]
