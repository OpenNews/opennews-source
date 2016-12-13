# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.conf import settings
from django.conf.urls import include, url
from django.conf.urls.static import static
from django.contrib import admin
from django.views import defaults as default_views

from source.base import urls
from source.base.views import L10NRedirectView

urlpatterns = [
    url(settings.ADMIN_URL, admin.site.urls),
    url(r'^browserid/', include('django_browserid.urls')),
    url(r'^en-(us|US)/', L10NRedirectView.as_view()),
    # Generate a robots.txt
    url(r'^robots.txt$',
        lambda r: HttpResponse(
            "User-agent: *\n%s: /" % ('Allow' if settings.ENGAGE_ROBOTS else 'Disallow') ,
            mimetype="text/plain"
        )
    ),
    url(r'', include(urls.BASE_URLS)),
] + static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)

if settings.DEBUG:
    # allows error pages to be debugged during development
    urlpatterns += [
        url(r'^400/$', default_views.bad_request, kwargs={'exception': Exception("Bad Request!")}),
        url(r'^403/$', default_views.permission_denied, kwargs={'exception': Exception("Permissin Denied")}),
        url(r'^404/$', default_views.page_not_found, kwargs={'exception': Exception("Page not Found")}),
        url(r'^500/$', default_views.server_error),
    ]
