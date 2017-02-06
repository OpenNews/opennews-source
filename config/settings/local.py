# -*- coding: utf-8 -*-
'''
Local settings

- Run in Debug mode
- Use console backend for emails
- Add Django Debug Toolbar
- Add django-extensions as app
'''

from .common import *

BASE_SITE_URL = 'http://127.0.0.1:8000'

# DEBUG
# ------------------------------------------------------------------------------
DEBUG = env.bool('DJANGO_DEBUG', default=True)
TEMPLATES[0]['OPTIONS']['debug'] = DEBUG
TEMPLATES[1]['OPTIONS']['debug'] = DEBUG

# SECRET CONFIGURATION
# ------------------------------------------------------------------------------
# Note: This key only used for development and testing.
SECRET_KEY = env("DJANGO_SECRET_KEY", default='!kl8xt91apv&7m*9px=j7%y*vr*8%k_q78#m010-kc8l-uqe_b')

# Mail settings
# ------------------------------------------------------------------------------
#EMAIL_HOST = 'localhost'
#EMAIL_PORT = 1025
#EMAIL_BACKEND = env('DJANGO_EMAIL_BACKEND', default='django.core.mail.backends.console.EmailBackend')

EMAIL_BACKEND = 'django.core.mail.backends.smtp.EmailBackend'
EMAIL_HOST = 'smtp.mailgun.org'
EMAIL_HOST_USER = env("MAILGUN_SMTP_LOGIN")
EMAIL_HOST_PASSWORD = env("MAILGUN_SMTP_PASSWORD")
EMAIL_PORT = 587
EMAIL_USE_TLS = True
DEFAULT_FROM_EMAIL = EMAIL_HOST_USER
EDITORIAL_EMAIL = 'ryan@opennews.org'

# CACHING
# ------------------------------------------------------------------------------
CACHES = {
    'default': {
        #'BACKEND': 'django.core.cache.backends.dummy.DummyCache',
        #'BACKEND': 'django.core.cache.backends.locmem.LocMemCache',
        'BACKEND': 'django_bmemcached.memcached.BMemcached',
        'LOCATION': '127.0.0.1:11211',
    }
}
BASE_URL = 'http://127.0.0.1:8000'

# django-debug-toolbar
# ------------------------------------------------------------------------------
MIDDLEWARE_CLASSES += ('debug_toolbar.middleware.DebugToolbarMiddleware',)
INSTALLED_APPS += ('debug_toolbar', )

INTERNAL_IPS = ('127.0.0.1', '10.0.2.2',)

DEBUG_TOOLBAR_CONFIG = {
    'DISABLE_PANELS': [
        'debug_toolbar.panels.redirects.RedirectsPanel',
    ],
    'SHOW_TEMPLATE_CONTEXT': True,
}


# Your local stuff: Below this line define 3rd party library settings
