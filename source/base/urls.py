from django.conf import settings
from django.conf.urls import include, url
from django.contrib.auth import views as auth_views
from django.views.decorators.cache import cache_page
from django.views.generic.base import RedirectView

from .feeds import ArticleFeed, RecentArticleSummaryFeed
from .views import SourceSearchView, HomepageView, SlackMessageView
from haystack.forms import SearchForm
from haystack.query import SearchQuerySet
from haystack.views import search_view_factory
from source.articles.views import ArticleList, ArticleDetail, ArticleRedirectView
from source.utils.caching import ClearCache

STANDARD_CACHE_TIME = getattr(settings, 'CACHE_MIDDLEWARE_SECONDS', 60*15)
FEED_CACHE_TIME = getattr(settings, 'FEED_CACHE_SECONDS', 60*60)

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
        regex = '^rss/recent-summaries/$',
        view = cache_page(FEED_CACHE_TIME)(RecentArticleSummaryFeed()),
        kwargs = {},
        name = 'recent_summaries_feed',
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
    url(r'^admin/password_reset/$', auth_views.password_reset, name='admin_password_reset'),
    url(r'^admin/password_reset/done/$', auth_views.password_reset_done, name='password_reset_done'),
    url(r'^reset/(?P<uidb64>[0-9A-Za-z_\-]+)/(?P<token>.+)/$', auth_views.password_reset_confirm, name='password_reset_confirm'),
    url(r'^reset/done/$', auth_views.password_reset_complete, name='password_reset_complete'),
    url(r'^auth/logout/$', auth_views.logout, name='logout'),
    url(r'^accounts/login/$', RedirectView.as_view(url='/admin/login/')),
    # fallback for old section-based URLs
    #url(
    #    regex = '^(?P<section>[-\w]+)/$',
    #    view = RedirectView.as_view(url='/articles/'),
    #    #view = cache_page(STANDARD_CACHE_TIME)(ArticleList.as_view()),
    #    kwargs = {},
    #    name = 'article_list_by_section',
    #),
    # leaving this in place for section-specific feeds
    url(
        regex = '^([-\w]+)/rss/$',
        #regex = '^(?P<section>[-\w]+)/rss/$',
        view = RedirectView.as_view(url='/rss/'),
        #view = cache_page(FEED_CACHE_TIME)(ArticleFeed()),
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
