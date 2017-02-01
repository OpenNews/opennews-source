import datetime
import logging
import os
import re
import types
from copy import copy

from django.conf import settings
from django.template.defaultfilters import linebreaks as django_linebreaks,\
    escapejs as django_escapejs, pluralize as django_pluralize,\
    date as django_date
from django.utils.encoding import force_text
from django.utils.timesince import timesince

from django_jinja import library
from jinja2 import Markup
from sorl.thumbnail.shortcuts import get_thumbnail
from typogrify.filters import typogrify as dj_typogrify,\
    smartypants as dj_smartypants

from source.articles.models import Article

logger = logging.getLogger('base.helpers')

@library.filter
def typogrify(string):
    return Markup(dj_typogrify(string))

@library.filter
def smartypants(string):
    return Markup(dj_smartypants(string))

@library.filter
def linebreaks(string):
    return django_linebreaks(string)

@library.filter
def escapejs(string):
    return django_escapejs(string)

@library.global_function
def get_timestamp():
    return datetime.datetime.now()
    
@library.filter
def dj_pluralize(string, arg='s'):
    return django_pluralize(string, arg)

@library.global_function
def dj_date(value, format_string):
    return django_date(value, format_string)

@library.global_function
def thumbnail(source, *args, **kwargs):    
    im = get_thumbnail(source, *args, **kwargs)
    return im.name

@library.filter
def dj_intcomma(value):
    """
    https://github.com/django/django/blob/master/django/contrib/humanize/templatetags/humanize.py
    Converts an integer to a string containing commas every three digits.
    For example, 3000 becomes '3,000' and 45000 becomes '45,000'.
    """
    orig = force_text(value)
    new = re.sub("^(-?\d+)(\d{3})", '\g<1>,\g<2>', orig)
    if orig == new:
        return new
    else:
        return dj_intcomma(new)
        
@library.filter
def simple_timesince(value):
    now = datetime.datetime.now()
    try:
        difference = now - value
    except:
        return value

    if difference <= datetime.timedelta(minutes=1):
        return 'just now'
    return '%(time)s ago' % {'time': timesince(value).split(', ')[0]}
    
@library.filter
def simple_datesince(value):
    today = datetime.datetime.now().date()
    try:
        difference = today - value
    except:
        return value

    if difference < datetime.timedelta(days=1):
        return 'today'
    return '%(days)s ago' % {'days': timesince(value).split(', ')[0]}

# FORM RENDERING
# https://github.com/kmike/django-widget-tweaks/blob/master/widget_tweaks/templatetags/widget_tweaks.py
def _process_field_attributes(field, attr, process):
    # split attribute name and value from 'attr:value' string
    params = attr.split(':', 1)
    attribute = params[0]
    value = params[1] if len(params) == 2 else ''

    field = copy(field)

    # decorate field.as_widget method with updated attributes
    old_as_widget = field.as_widget

    def as_widget(self, widget=None, attrs=None, only_initial=False):
        attrs = attrs or {}
        process(widget or self.field.widget, attrs, attribute, value)
        html = old_as_widget(widget, attrs, only_initial)
        self.as_widget = old_as_widget
        return html

    field.as_widget = types.MethodType(as_widget, field)
    return field

@library.filter
def append_attr(field, attr):
    def process(widget, attrs, attribute, value):
        if attrs.get(attribute):
            attrs[attribute] += ' ' + value
        elif widget.attrs.get(attribute):
            attrs[attribute] = widget.attrs[attribute] + ' ' + value
        else:
            attrs[attribute] = value
    return _process_field_attributes(field, attr, process)


@library.filter
def add_class(field, css_class):
    return append_attr(field, 'class:' + css_class)

@library.global_function
def get_random_articles(num, recent_days=None):
    random_articles = Article.live_objects.all()
    if recent_days:
        cutoff = datetime.datetime.today() - datetime.timedelta(recent_days)
        random_articles = random_articles.filter(pubdate__gte=cutoff)
    random_articles = random_articles.order_by('?')

    try:
        if num == 1:
            return random_articles[0]
        else:
            return random_articles[:num]
    except:
        return None