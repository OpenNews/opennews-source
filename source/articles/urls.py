from django.conf import settings
from django.conf.urls import url
from django.views.decorators.cache import cache_page
from django.views.generic.base import RedirectView

from .views import ArticleList, ArticleSuggestArticle
from source.base.feeds import ArticleFeed

STANDARD_CACHE_TIME = getattr(settings, 'CACHE_MIDDLEWARE_SECONDS', 60*15)
FEED_CACHE_TIME = getattr(settings, 'FEED_CACHE_SECONDS', 60*15)

urlpatterns = [
    # /articles/ is matched as a section in base.urls
    #url(
    #    regex = '^$',
    #    view = ArticleList.as_view(),
    #    kwargs = {},
    #   name = 'article_list',
    #,
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
        view = RedirectView.as_view(url='/articles/'),
        kwargs  = {},
        name = 'article_list_tags',
    ),
    url(
        regex = '^suggest/$',
        view = ArticleSuggestArticle.as_view(),
        kwargs  = {},
        name = 'article_suggest_article',
    ),
]
