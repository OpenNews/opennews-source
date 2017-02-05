from django.conf import settings
from django.conf.urls import url
from django.views.decorators.cache import cache_page

from source.people.views import OrganizationList, OrganizationDetail, OrganizationUpdate

STANDARD_CACHE_TIME = getattr(settings, 'CACHE_MIDDLEWARE_SECONDS', 60*15)

urlpatterns = [
    url(
        regex = '^$',
        view = cache_page(STANDARD_CACHE_TIME)(OrganizationList.as_view()),
        kwargs = {},
        name = 'organization_list',
    ),
    url(
        regex = '^(?P<slug>[-\w]+)/$',
        view = cache_page(STANDARD_CACHE_TIME)(OrganizationDetail.as_view()),
        kwargs = {},
        name = 'organization_detail',
    ),
]
