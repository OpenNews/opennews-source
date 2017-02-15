from django.conf import settings
from django.conf.urls import url
from django.views.decorators.cache import cache_page

from .views import GuideList, GuideDetail, GuideSuggestGuide
from source.base.feeds import GuideFeed

STANDARD_CACHE_TIME = getattr(settings, 'CACHE_MIDDLEWARE_SECONDS', 60*15)
FEED_CACHE_TIME = getattr(settings, 'FEED_CACHE_SECONDS', 60*60)

urlpatterns = [
    url(
        regex = '^$',
        view = cache_page(STANDARD_CACHE_TIME)(GuideList.as_view()),
        kwargs = {},
        name = 'guide_list',
    ),
    url(
        regex = '^suggest/$',
        view = GuideSuggestGuide.as_view(),
        kwargs  = {},
        name = 'guide_suggest_guide',
    ),
    url(
        regex = '^rss/$',
        view = cache_page(FEED_CACHE_TIME)(GuideFeed()),
        kwargs = {},
        name = 'guide_list_feed',
    ),
    url(
        regex = '^(?P<slug>[-\w]+)/$',
        view = cache_page(STANDARD_CACHE_TIME)(GuideDetail.as_view()),
        kwargs = {},
        name = 'guide_detail',
    ),
]
