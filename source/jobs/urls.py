from django.conf import settings
from django.conf.urls import url
from django.views.decorators.cache import cache_page

from .views import JobList, JobUpdate, JobsSendLoginLink
from source.base.feeds import JobFeed

STANDARD_CACHE_TIME = getattr(settings, 'CACHE_MIDDLEWARE_SECONDS', 60*15)
FEED_CACHE_TIME = getattr(settings, 'FEED_CACHE_SECONDS', 60*15)

urlpatterns = [
    url(
        regex = '^$',
        view = cache_page(STANDARD_CACHE_TIME)(JobList.as_view()),
        kwargs = {},
        name = 'job_list',
    ),
    url(
        regex = '^rss/$',
        view = cache_page(FEED_CACHE_TIME)(JobFeed()),
        kwargs = {},
        name = 'job_list_feed',
    ),
    url(
        regex = '^json/$',
        view = cache_page(FEED_CACHE_TIME)(JobList.as_view()),
        kwargs = {'render_json': True},
        name = 'job_list_feed_json',
    ),
    url(
        regex = '^update/$',
        view = JobUpdate.as_view(),
        kwargs = {},
        name = 'job_update',
    ),
    url(
        regex = '^login/$',
        view = JobsSendLoginLink.as_view(),
        kwargs = {},
        name = 'job_send_login_link',
    ),
]
