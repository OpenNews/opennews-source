# -*- coding: utf-8 -*-
"""
Django settings for source project.

For more information on this file, see
https://docs.djangoproject.com/en/dev/topics/settings/

For the full list of settings and their values, see
https://docs.djangoproject.com/en/dev/ref/settings/
"""
from __future__ import absolute_import, unicode_literals

import environ

ROOT_DIR = environ.Path(__file__) - 3  # (/a/b/myfile.py - 3 = /)
APPS_DIR = ROOT_DIR.path('source')

env = environ.Env()

# APP CONFIGURATION
# ------------------------------------------------------------------------------
DJANGO_APPS = (
    'django.contrib.admin',
    'django.contrib.auth',
    'django.contrib.contenttypes',
    'django.contrib.flatpages',
    'django.contrib.humanize',
    'django.contrib.messages',
    'django.contrib.redirects',
    'django.contrib.sessions',
    'django.contrib.sites',
    'whitenoise.runserver_nostatic',
    'django.contrib.staticfiles',
)
LOCAL_APPS = (
    'source.base',
    'source.articles',
    'source.code',
    'source.guides',
    'source.jobs',
    'source.people',
    'source.tags',
)
THIRD_PARTY_APPS = (
    'caching',
    'haystack',
    'sorl.thumbnail',
    'taggit',
    'django_jinja',
    'storages',
    'lockdown',
)

# See: https://docs.djangoproject.com/en/dev/ref/settings/#installed-apps
INSTALLED_APPS = DJANGO_APPS + LOCAL_APPS + THIRD_PARTY_APPS

# MIDDLEWARE CONFIGURATION
# ------------------------------------------------------------------------------
MIDDLEWARE_CLASSES = (
    'django.middleware.security.SecurityMiddleware',
    'whitenoise.middleware.WhiteNoiseMiddleware',
    'django.contrib.sessions.middleware.SessionMiddleware',
    'django.middleware.common.CommonMiddleware',
    'django.middleware.csrf.CsrfViewMiddleware',
    'django.contrib.auth.middleware.AuthenticationMiddleware',
    'source.utils.auth.SesameAuthenticationMiddleware',
    'django.contrib.messages.middleware.MessageMiddleware',
    'django.middleware.clickjacking.XFrameOptionsMiddleware',
    'django.contrib.redirects.middleware.RedirectFallbackMiddleware',
    'django.contrib.flatpages.middleware.FlatpageFallbackMiddleware',
)

# MIGRATIONS CONFIGURATION
# ------------------------------------------------------------------------------
MIGRATION_MODULES = {
    'sites': 'source.contrib.sites.migrations'
}

# DEBUG
# ------------------------------------------------------------------------------
DEBUG = env.bool('DJANGO_DEBUG', False)


# FIXTURE CONFIGURATION
# ------------------------------------------------------------------------------
FIXTURE_DIRS = (
    str(APPS_DIR.path('fixtures')),
)

# EMAIL CONFIGURATION
# ------------------------------------------------------------------------------
DEFAULT_FROM_EMAIL = env('DJANGO_DEFAULT_FROM_EMAIL',
                         default='Source <source@opennews.org>')

# MANAGER CONFIGURATION
# ------------------------------------------------------------------------------
ADMINS = [
    ('Ryan Pitts', 'ryan@opennews.org'),
]
MANAGERS = ADMINS
EDITORIAL_EMAIL = ['ryan@opennews.org', 'source@opennews.org']

# DATABASE CONFIGURATION
# ------------------------------------------------------------------------------
DATABASES = {
    # Raises ImproperlyConfigured exception if DATABASE_URL not in os.environ
    'default': env.db("DATABASE_URL", default="postgres:///newsource"),
}
DATABASES['default']['ATOMIC_REQUESTS'] = True


# GENERAL CONFIGURATION
# ------------------------------------------------------------------------------
TIME_ZONE = 'UTC'
LANGUAGE_CODE = 'en-us'
SITE_ID = 1
USE_I18N = False
USE_L10N = False
USE_TZ = False

# TEMPLATE CONFIGURATION
# ------------------------------------------------------------------------------
from django_jinja.builtins import DEFAULT_EXTENSIONS
TEMPLATES = [
    {
        'BACKEND': 'django_jinja.backend.Jinja2',
        'DIRS': [
            str(APPS_DIR + app.split('.')[1] + 'templates') for app in LOCAL_APPS
        ],
        'OPTIONS': {
            'debug': DEBUG,
            'match_extension': '.html',
            'match_regex': r'^(?!admin/).*',
            'auto_reload': DEBUG,
            'extensions': DEFAULT_EXTENSIONS,
            'context_processors': [
                'django.template.context_processors.debug',
                'django.template.context_processors.request',
                'django.contrib.auth.context_processors.auth',
                'django.template.context_processors.i18n',
                'django.template.context_processors.media',
                'django.template.context_processors.static',
                'django.template.context_processors.tz',
                'django.contrib.messages.context_processors.messages',
                'source.base.context_processors.globals',
            ],
        }
    },
    {
        'BACKEND': 'django.template.backends.django.DjangoTemplates',
        'DIRS': [
            str(APPS_DIR.path('templates')),
            str(APPS_DIR + 'base/templates'),
        ],
        'OPTIONS': {
            'debug': DEBUG,
            'loaders': [
                'django.template.loaders.filesystem.Loader',
                'django.template.loaders.app_directories.Loader',
            ],
            'context_processors': [
                'django.template.context_processors.debug',
                'django.template.context_processors.request',
                'django.contrib.auth.context_processors.auth',
                'django.template.context_processors.i18n',
                'django.template.context_processors.media',
                'django.template.context_processors.static',
                'django.template.context_processors.tz',
                'django.contrib.messages.context_processors.messages',
                'source.base.context_processors.globals',
            ],
        },
    },
]
KEEP_DJANGO_TEMPLATES = ['admin', 'debug_toolbar',]

# STATIC FILE CONFIGURATION
# ------------------------------------------------------------------------------
STATIC_ROOT = str(ROOT_DIR('staticfiles'))
STATIC_URL = '/static/'
STATICFILES_DIRS = (
    str(APPS_DIR.path('static')),
)
STATICFILES_FINDERS = (
    'django.contrib.staticfiles.finders.FileSystemFinder',
    'django.contrib.staticfiles.finders.AppDirectoriesFinder',
)

# MEDIA CONFIGURATION
# ------------------------------------------------------------------------------
MEDIA_ROOT = str(APPS_DIR('media'))

# See: https://docs.djangoproject.com/en/dev/ref/settings/#media-url
#MEDIA_URL = '/media/'

DEFAULT_FILE_STORAGE = 'storages.backends.s3boto.S3BotoStorage'
#STATICFILES_STORAGE = 'storages.backends.s3boto.S3BotoStorage'
AWS_S3_ACCESS_KEY_ID = env.str('AWS_S3_ACCESS_KEY_ID', None)
AWS_S3_SECRET_ACCESS_KEY = env.str('AWS_S3_SECRET_ACCESS_KEY', None)
AWS_AUTO_CREATE_BUCKET = True
AWS_QUERYSTRING_AUTH = False
AWS_STORAGE_BUCKET_NAME = 'media.opennews.org'

from boto.s3.connection import OrdinaryCallingFormat
AWS_S3_CALLING_FORMAT = OrdinaryCallingFormat()
#MEDIA_URL = 'https://s3.amazonaws.com/%s/' % AWS_STORAGE_BUCKET_NAME
MEDIA_URL = 'https://media.opennews.org/'
THUMBNAIL_PRESERVE_FORMAT = True
THUMBNAIL_DEBUG = DEBUG

# URL Configuration
# ------------------------------------------------------------------------------
ROOT_URLCONF = 'config.urls'
WSGI_APPLICATION = 'config.wsgi.application'

# AUTHENTICATION CONFIGURATION
# ------------------------------------------------------------------------------
AUTHENTICATION_BACKENDS = (
    'django.contrib.auth.backends.ModelBackend',
    'source.utils.auth.SesameModelBackend',
)

# SLUGLIFIER
AUTOSLUG_SLUGIFY_FUNCTION = 'slugify.slugify'

# Location of root django.contrib.admin URL, use {% url 'admin:index' %}
ADMIN_URL = r'^admin/'

# common stuff, 3rd party library settings
ENGAGE_ROBOTS = env.bool('ENGAGE_ROBOTS', False)

CACHE_MIDDLEWARE_SECONDS = 60*15
FEED_CACHE_SECONDS = 60*15

# Search with django-haystack
HAYSTACK_CONNECTIONS = {
    'default': {
        'ENGINE': 'haystack.backends.elasticsearch_backend.ElasticsearchSearchEngine',
        'URL': 'http://127.0.0.1:9200/',
        'INDEX_NAME': 'haystack',
    },
}

# Lockdown
LOCKDOWN_ENABLED = env.bool('LOCKDOWN_ENABLED', False)
if LOCKDOWN_ENABLED:
    LOCKDOWN_PASSWORDS = env.list('LOCKDOWN_PASSWORDS',[])
    LOCKDOWN_LOGOUT_KEY = 'logout'
    MIDDLEWARE_CLASSES += ('lockdown.middleware.LockdownMiddleware',)

TWITTER_CONSUMER_KEY = env.str('TWITTER_CONSUMER_KEY', None)
TWITTER_CONSUMER_SECRET = env.str('TWITTER_CONSUMER_SECRET', None)
TWITTER_ACCESS_TOKEN = env.str('TWITTER_ACCESS_TOKEN', None)
TWITTER_ACCESS_TOKEN_SECRET = env.str('TWITTER_ACCESS_TOKEN_SECRET', None)

JOBS_TWITTER_CONSUMER_KEY = env.str('JOBS_TWITTER_CONSUMER_KEY', None)
JOBS_TWITTER_CONSUMER_SECRET = env.str('JOBS_TWITTER_CONSUMER_SECRET', None)
JOBS_TWITTER_ACCESS_TOKEN = env.str('JOBS_TWITTER_ACCESS_TOKEN', None)
JOBS_TWITTER_ACCESS_TOKEN_SECRET = env.str('JOBS_TWITTER_ACCESS_TOKEN_SECRET', None)

GITHUB_CLIENT_ID = env.str('GITHUB_CLIENT_ID', None)
GITHUB_CLIENT_SECRET = env.str('GITHUB_CLIENT_SECRET', None)

SLACK_TOKEN = env.str('SLACK_TOKEN', None)

# sorl-thumbnail settings
DEFAULT_IMAGE_SRC = 'img/missing.png'

TIME_ZONE='America/Chicago'
HTTP_PROTOCOL = 'https'
BASE_SITE_URL = 'https://source.opennews.org'

SESAME_MAX_AGE = 5 * 60 # 5 minutes
