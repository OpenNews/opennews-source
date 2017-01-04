from django.conf import settings
from django.conf.urls import url
from django.views.decorators.cache import cache_page

from source.people.views import CommunityList

STANDARD_CACHE_TIME = getattr(settings, 'CACHE_MIDDLEWARE_SECONDS', 60*15)

urlpatterns = [
    url(
        regex = '^$',
        view = cache_page(STANDARD_CACHE_TIME)(CommunityList.as_view()),
        kwargs = {},
        name = 'community_list',
    ),
]
