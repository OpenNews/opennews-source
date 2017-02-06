from django.conf import settings
from django.conf.urls import url
from django.core.urlresolvers import reverse
from django.views.decorators.cache import cache_page
from django.views.generic.base import RedirectView

from .views import ArticleList, ArticleDetail, ArticleSuggestArticle
from source.base.feeds import ArticleFeed

STANDARD_CACHE_TIME = getattr(settings, 'CACHE_MIDDLEWARE_SECONDS', 60*15)
FEED_CACHE_TIME = getattr(settings, 'FEED_CACHE_SECONDS', 60*15)

urlpatterns = [
    url(
        regex = '^$',
        view = cache_page(STANDARD_CACHE_TIME)(ArticleList.as_view()),
        kwargs = {},
        name = 'article_list',
    ),
    url(
        regex = '^rss/$',
        view = cache_page(FEED_CACHE_TIME)(ArticleFeed()),
        kwargs = {},
        name = 'article_list_feed',
    ),
    url(
        regex = '^tags/(?P<tag_slugs>[-\w\+]+)/$',
        view = cache_page(STANDARD_CACHE_TIME)(ArticleList.as_view()),
        kwargs = {},
        name = 'article_list_by_tag',
    ),
    url(
        regex = '^tags/(?P<tag_slugs>[-\w\+]+)/rss/$',
        view = cache_page(FEED_CACHE_TIME)(ArticleFeed()),
        kwargs = {},
        name = 'article_list_by_tag_feed',
    ),
    url(
        regex = '^tags/$',
        view = RedirectView.as_view(pattern_name='article_list'),
        kwargs  = {},
        name = 'article_list_tags',
    ),
    url(
        regex = '^suggest/$',
        view = ArticleSuggestArticle.as_view(),
        kwargs  = {},
        name = 'article_suggest_article',
    ),
    url(
        regex = '^(?P<slug>[-\w]+)/$',
        view = cache_page(STANDARD_CACHE_TIME)(ArticleDetail.as_view()),
        kwargs = {},
        name = 'article_detail',
    ),
]
