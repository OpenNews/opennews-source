from django.conf import settings
from django.conf.urls import url
from django.views.decorators.cache import cache_page
from django.views.generic import RedirectView
from django.views.defaults import page_not_found

from .views import CodeList, CodeDetail, CodeSuggestRepo
from source.base.feeds import CodeFeed

STANDARD_CACHE_TIME = getattr(settings, 'CACHE_MIDDLEWARE_SECONDS', 60*15)
FEED_CACHE_TIME = getattr(settings, 'FEED_CACHE_SECONDS', 60*60)

urlpatterns = [
    url(
        regex = '^$',
        view = cache_page(STANDARD_CACHE_TIME)(CodeList.as_view()),
        kwargs = {},
        name = 'code_list',
    ),
    url(
        regex = '^suggest/$',
        view = CodeSuggestRepo.as_view(),
        kwargs  = {},
        name = 'code_suggest_repo',
    ),
    url(
        regex = '^rss/$',
        view = cache_page(FEED_CACHE_TIME)(CodeFeed()),
        kwargs = {},
        name = 'code_list_feed',
    ),
    url(
        regex = '^json/$',
        view = cache_page(FEED_CACHE_TIME)(CodeList.as_view()),
        kwargs = {'render_json': True},
        name = 'code_list_feed_json',
    ),
    url(
        regex = '^tags/(?P<tag_slugs>[-\w\+]+)/$',
        view = cache_page(STANDARD_CACHE_TIME)(CodeList.as_view()),
        kwargs = {},
        name = 'code_list_by_tag',
    ),
    url(
        regex = '^tags/([-\w\+]+)/rss/$',
        #regex = '^tags/(?P<tag_slugs>[-\w\+]+)/rss/$',
        view = page_not_found,
        #view = cache_page(FEED_CACHE_TIME)(CodeFeed()),
        kwargs = {},
        name = 'code_list_by_tag_feed',
    ),
    url(
        regex = '^tags/([-\w\+]+)/json/$',
        #regex = '^tags/(?P<tag_slugs>[-\w\+]+)/json/$',
        view = page_not_found,
        #view = cache_page(FEED_CACHE_TIME)(CodeList.as_view()),
        kwargs = {},
        #kwargs = {'render_json': True},
        name = 'code_list_by_tag_feed_json',
    ),
    url(
        regex = '^tags/$',
        view = RedirectView.as_view(),
        kwargs  = {'url': '/code/'},
        name = 'code_list_tags',
    ),
    url(
        regex = '^(?P<slug>[-\w]+)/$',
        view = cache_page(STANDARD_CACHE_TIME)(CodeDetail.as_view()),
        kwargs = {},
        name = 'code_detail',
    ),
]
