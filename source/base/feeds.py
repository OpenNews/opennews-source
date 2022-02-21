from datetime import datetime, timedelta

from django.conf import settings
from django.contrib.syndication.views import Feed
from django.core.urlresolvers import reverse
from django.db.models import Q
from django.http import Http404
from django.shortcuts import get_object_or_404

from source.articles.models import Article, Section, Category
from source.code.models import Code
from source.guides.models import Guide
from source.jobs.models import Job
from source.tags.models import TechnologyTag, ConceptTag
from source.tags.utils import get_validated_tag_list, get_tag_filtered_queryset
from taggit.models import Tag

ONE_DAY_AGO = datetime.now() - timedelta(hours=24)

class ObjectWithTagsFeed(Feed):
    '''common get_object for Article and Code feeds to handle tag queries'''
    def get_object(self, request, *args, **kwargs):
        self.section = kwargs.get('section', None)
        if self.section:
            self.section = get_object_or_404(Section, slug=self.section)
        self.category = kwargs.get('category', None)
        if self.category:
            self.category = get_object_or_404(Category, slug=self.category)
        self.tag_slugs = kwargs.get('tag_slugs', None)
        if self.tag_slugs:
            self.tag_slug_list = self.tag_slugs.split('+')
            self.tags = get_validated_tag_list(self.tag_slug_list, tags=[])
        return ''

class ArticleFeed(ObjectWithTagsFeed):
    description_template = "feeds/article_description.html"
    
    def title(self, obj):
        if self.section:
            return "Source: %s" % self.section.name
        elif self.category:
            return "Source: Articles in the category %s" % self.category.name
        elif self.tag_slugs:
            return "Source: Articles tagged with '%s'" % "+".join([tag.name for tag in self.tags])
        return "Source"

    def link(self, obj):
        if self.section:
            return reverse('article_list')
            #return reverse('article_list_by_section', kwargs={'section': self.section.slug})
        elif self.category:
            return reverse('article_list_by_category', kwargs={'category': self.category.slug})
        elif self.tag_slugs:
            return reverse('article_list_by_tag', kwargs={'tag_slugs': self.tag_slugs})
        return reverse('homepage')

    def description(self, obj):
        identifier = 'from Source'
        if self.section:
            identifier = "in the %s section" % self.section.name
        elif self.category:
            identifier = "in the %s category" % self.category.name
        elif self.tag_slugs:
            identifier = "tagged with '%s'" % "+".join([tag.name for tag in self.tags])
        return "Recent articles %s" % identifier

    def item_title(self, item):
        _title = item.title
        # Alert anyone using an RSS feed on staging
        if settings.DEBUG:
            _title = "THIS IS A TEST ARTICLE ON THE STAGING SITE: " + _title

        return _title
        
    def item_pubdate(self, item):
        return item.pubdate
        
    def item_author_name(self, item):
        if item.get_live_author_set().exists():
            return ','.join([author.name() for author in item.get_live_author_set()])
        return ''
        
    def item_categories(self, item):
        if item.category:
            return [item.category.name]
        return ''
        
    def items(self, obj):
        queryset = Article.live_objects.filter(show_in_lists=True)
        if self.section:
            queryset = queryset.filter(category__section=self.section)
        elif self.category:
            queryset = queryset.filter(category=self.category)
        elif self.tag_slugs:
            queryset = get_tag_filtered_queryset(queryset, self.tag_slug_list)
        return queryset[:20]

class CodeFeed(ObjectWithTagsFeed):
    def title(self, obj):
        identifier = ""
        if self.tag_slugs:
            identifier = " tagged '%s'" % "+".join([tag.name for tag in self.tags])
        return "Source: Code%s" % identifier

    def link(self, obj):
        if self.tag_slugs:
            return reverse('code_list_by_tag', kwargs={'tag_slugs': self.tag_slugs})
        return reverse('code_list')

    def description(self, obj):
        identifier = " from Source"
        if self.tag_slugs:
            identifier = " tagged '%s'" % "+".join([tag.name for tag in self.tags])
        return "Recent code index pages%s" % identifier

    def item_title(self, item):
        _name = item.name
        # Alert anyone using an RSS feed on staging
        if settings.DEBUG:
            _name = "THIS IS A TEST ENTRY ON THE STAGING SITE: " + _name

        return _name

    def item_description(self, item):
        return item.description

    def items(self, obj):
        queryset = Code.live_objects.order_by('-created')
        if self.tag_slugs:
            queryset = get_tag_filtered_queryset(queryset, self.tag_slug_list)
        return queryset[:20]

class JobFeed(Feed):
    def title(self, obj):
        return "Source: Jobs"

    def link(self, obj):
        return reverse('job_list')

    def description(self, obj):
        return 'Recent jobs listed on Source'

    def item_title(self, item):
        _name = item.name
        # Alert anyone using an RSS feed on staging
        if settings.DEBUG:
            _name = "THIS IS A TEST ENTRY ON THE STAGING SITE: " + _name

        return _name

    def item_pubdate(self, item):
        return item.modified

    def item_description(self, item):
        return 'Job posting from %s' % item.organization
        
    def item_link(self, item):
        '''
        We don't have individual detail pages, so use item.url
        or fall back to jobs list page.
        '''
        return item.url or reverse('job_list')

    def items(self, obj):
        queryset = Job.live_objects.order_by('-created')
        return queryset[:20]

class GuideFeed(Feed):
    def title(self, obj):
        return "Source: Guides"

    def link(self, obj):
        return reverse('guide_list')

    def description(self, obj):
        return 'Recent guides from Source'

    def item_title(self, item):
        _name = item.title
        # Alert anyone using an RSS feed on staging
        if settings.DEBUG:
            _name = "THIS IS A TEST ENTRY ON THE STAGING SITE: " + _name

        return _name

    def item_description(self, item):
        return item.summary_or_description

    def items(self, obj):
        queryset = Guide.live_objects.order_by('-pubdate')
        return queryset[:20]

class RecentArticleSummaryFeed(Feed):
    description_template = "feeds/article_summary_only.html"
    
    def title(self, obj):
        return "Source: Latest Article Summaries"

    def link(self, obj):
        return reverse('article_list')

    def description(self, obj):
        return 'Recent articles from Source'

    def item_title(self, item):
        _name = item.title
        # Alert anyone using an RSS feed on staging
        if settings.DEBUG:
            _name = "THIS IS A TEST ENTRY ON THE STAGING SITE: " + _name

        return _name

    def item_pubdate(self, item):
        return item.pubdate
        
    def item_author_name(self, item):
        if item.get_live_author_set().exists():
            return ','.join([author.name() for author in item.get_live_author_set()])
        return ''

    def item_description(self, item):
        return item.safe_summary

    def items(self, obj):
        queryset = Article.live_objects.filter(show_in_lists=True)
        queryset = queryset.filter(pubdate__gte=ONE_DAY_AGO)
        return queryset
