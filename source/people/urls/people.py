from django.conf import settings
from django.conf.urls import url
from django.views.decorators.cache import cache_page

from source.people.views import PersonList, PersonDetail, PersonUpdate, PersonSearchJson

STANDARD_CACHE_TIME = getattr(settings, 'CACHE_MIDDLEWARE_SECONDS', 60*15)

urlpatterns = [
    url(
        regex = '^$',
        view = cache_page(STANDARD_CACHE_TIME)(PersonList.as_view()),
        kwargs = {},
        name = 'person_list',
    ),
    url(
        regex = '^update/$',
        view = PersonUpdate.as_view(),
        kwargs = {},
        name = 'person_update',
    ),
    url(
        regex   = '^json/$',
        view    = PersonSearchJson.as_view(),
        kwargs  = {},
        name    = 'person_search_json',
    ),
    url(
        regex = '^(?P<slug>[-\w]+)/$',
        view = cache_page(STANDARD_CACHE_TIME)(PersonDetail.as_view()),
        kwargs = {},
        name = 'person_detail',
    ),
]
