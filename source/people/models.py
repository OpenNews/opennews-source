import requests
from datetime import datetime

from django.conf import settings
from django.core.urlresolvers import reverse
from django.contrib.auth.models import User
from django.db import models
from django.db.models.signals import post_save, post_delete
from django.dispatch import receiver
from django.utils.html import format_html

from caching.base import CachingManager, CachingMixin
from sorl.thumbnail import ImageField
from source.base.utils import disable_for_loaddata
from source.utils.auth import get_or_create_user
from source.utils.caching import expire_page_cache

class LivePersonManager(CachingManager):
    def get_queryset(self):
        return super(LivePersonManager, self).get_queryset().filter(is_live=True)


class Person(CachingMixin, models.Model):
    created = models.DateTimeField(auto_now_add=True)
    modified = models.DateTimeField(auto_now=True)
    is_live = models.BooleanField('Display on site', default=True)
    show_in_lists = models.BooleanField('Show on People list page', default=True)
    first_name = models.CharField(max_length=128)
    last_name = models.CharField(max_length=128)
    slug = models.SlugField(unique=True)
    photo = ImageField(upload_to='img/uploads/person_photos', blank=True, null=True)
    email = models.EmailField('Email address', blank=True)
    twitter_username = models.CharField(max_length=32, blank=True)
    twitter_bio = models.TextField(blank=True)
    twitter_profile_image_url = models.URLField(blank=True)
    github_username = models.CharField(max_length=32, blank=True)
    github_repos_num = models.PositiveIntegerField(blank=True, null=True)
    github_gists_num = models.PositiveIntegerField(blank=True, null=True)
    description = models.TextField('Bio', blank=True)
    organizations = models.ManyToManyField('Organization', blank=True)
    objects = models.Manager()
    live_objects = LivePersonManager()
    
    class Meta:
        ordering = ('last_name', 'first_name',)
        verbose_name_plural = 'People'
        
    def __str__(self):
        return '%s %s' % (self.first_name, self.last_name)
        
    def save(self, *args, **kwargs):
        self.first_name = self.first_name.strip()
        self.last_name = self.last_name.strip()
        # clean up our username fields, just in case
        if self.twitter_username:
            self.twitter_username = self.twitter_username.strip()
            if self.twitter_username.startswith('@'):
                self.twitter_username = self.twitter_username.strip('@')
            if '/' in self.twitter_username:
                self.twitter_username = self.twitter_username.split('/')[-1]
        if self.github_username:
            self.github_username = self.github_username.strip()
            if '/' in self.github_username:
                self.github_username = self.github_username.split('/')[-1]
        super(Person, self).save(*args, **kwargs)

    def name(self):
        return u'{0} {1}'.format(self.first_name, self.last_name).strip()
        
    @models.permalink
    def get_absolute_url(self):
        return ('person_detail', (), {
            'slug': self.slug })
    
    @property
    def sort_letter(self):
        return self.last_name[:1]

    def get_live_article_set(self):
        return self.article_set.filter(is_live=True, show_in_lists=True, pubdate__lte=datetime.now())

    def get_live_article_authored_set(self):
        return self.article_authors.filter(is_live=True, show_in_lists=True, pubdate__lte=datetime.now())

    def get_live_organization_set(self):
        return self.organizations.filter(is_live=True)

    def get_live_code_set(self):
        return self.code_set.filter(is_live=True)
        
    def get_website(self):
        try:
            return self.personlink_set.all()[0].url
        except:
            return None
            
    def get_bio(self):
        return self.description or self.twitter_bio or ''

    def admin_image_tag(self):
        if self.photo:
            return format_html(
                '<img src="{}{}" style="height: 30px;" />',
                settings.MEDIA_URL,
                self.photo,
            )
        return None
    admin_image_tag.short_description = 'Photo'

    def admin_email_tag(self):
        if self.email:
            return format_html(
                '<a href="mailto:{}">{}</a>',
                self.email,
                self.email,
            )
        return None
    admin_email_tag.short_description = 'Email'

    def admin_twitter_tag(self):
        if self.twitter_username:
            return format_html(
                '<a href="https://twitter.com/{}">@{}</a>',
                self.twitter_username,
                self.twitter_username,
            )
        return None
    admin_twitter_tag.short_description = 'Twitter'

    def admin_github_tag(self):
        if self.github_username:
            return format_html(
                '<a href="https://github.com/{}">{}</a>',
                self.github_username,
                self.github_username,
            )
        return None
    admin_github_tag.short_description = 'Github'

class PersonLink(CachingMixin, models.Model):
    created = models.DateTimeField(auto_now_add=True)
    modified = models.DateTimeField(auto_now=True)
    person = models.ForeignKey(Person, on_delete=models.CASCADE)
    name = models.CharField(max_length=128)
    url = models.URLField()
    objects = models.Manager()

    class Meta:
        ordering = ('person', 'name',)
        verbose_name = 'Person Link'
        verbose_name_plural = 'Person Links - The first item will be linked as "Visit Website" in author bios'

    def __str__(self):
        return '%s: %s' % (self.person.name, self.name)




class LiveOrganizationManager(CachingManager):
    def get_queryset(self):
        return super(LiveOrganizationManager, self).get_queryset().filter(is_live=True)


class Organization(CachingMixin, models.Model):
    created = models.DateTimeField(auto_now_add=True)
    modified = models.DateTimeField(auto_now=True)
    is_live = models.BooleanField('Display on site', default=True)
    show_in_lists = models.BooleanField('Show on Organization list page', default=True)
    name = models.CharField(max_length=255)
    slug = models.SlugField(unique=True)
    email = models.EmailField('Email address', blank=True)
    twitter_username = models.CharField(max_length=32, blank=True)
    github_username = models.CharField(max_length=32, blank=True)
    github_repos_num = models.PositiveIntegerField(blank=True, null=True)
    github_gists_num = models.PositiveIntegerField(blank=True, null=True)
    homepage = models.URLField(blank=True)
    description = models.TextField(blank=True)
    # Location
    address = models.CharField(max_length=255, blank=True)
    city = models.CharField(max_length=64, blank=True)
    state = models.CharField(max_length=32, blank=True)
    country = models.CharField(max_length=32, blank=True, help_text="Only necessary if outside the U.S.")
    logo = ImageField(upload_to='img/uploads/org_logos', help_text="Resized to fit 300x200 box in template", blank=True, null=True)
    objects = models.Manager()
    live_objects = LiveOrganizationManager()
    
    class Meta:
        ordering = ('name',)
        
    def __str__(self):
        return '%s' % self.name
        
    def save(self, *args, **kwargs):
        # clean up our username fields, just in case
        if self.twitter_username.startswith('@'):
            self.twitter_username = self.twitter_username.strip('@')
        if '/' in self.twitter_username:
            self.twitter_username = self.twitter_username.split('/')[-1]
        if '/' in self.github_username:
            self.github_username = self.github_username.split('/')[-1]
            
        super(Organization, self).save(*args, **kwargs)

    @models.permalink
    def get_absolute_url(self):
        return ('organization_detail', (), {
            'slug': self.slug })
            
    @property
    def location_string_for_static_map(self):
        _locs = []
        for _loc in [self.address, self.city, self.state, self.country]:
            if _loc: _locs.append(_loc)
        return ",".join(_locs).replace(' ','+')

    @property
    def location(self):
        _locs = []
        for _loc in [self.city, self.state, self.country]:
            if _loc: _locs.append(_loc)
        return ", ".join(_locs)
        
    @property
    def sort_letter(self):
        return self.name.replace('The ', '')[:1]
        
    def get_live_article_set(self):
        return self.article_set.filter(is_live=True, show_in_lists=True, pubdate__lte=datetime.now())
        
    def get_live_person_set(self):
        return self.person_set.filter(is_live=True)

    def get_live_code_set(self):
        return self.code_set.filter(is_live=True)

    def get_live_job_set(self):
        return self.job_set.filter(is_live=True, listing_start_date__lte=datetime.today(), listing_end_date__gte=datetime.today())
    
    def has_open_jobs(self):
        return self.get_live_job_set().exists()

    def admin_count(self):
        return self.organizationadmin_set.count()
        
    def admin_image_tag(self):
        if self.logo:
            return format_html(
                '<img src="{}{}" style="height: 15px;" />',
                settings.MEDIA_URL,
                self.logo,
            )
        return None
    admin_image_tag.short_description = 'Logo'

    def admin_email_tag(self):
        if self.email:
            return format_html(
                '<a href="mailto:{}">{}</a>',
                self.email,
                self.email,
            )
        return None
    admin_email_tag.short_description = 'Email'

    def admin_twitter_tag(self):
        if self.twitter_username:
            return format_html(
                '<a href="https://twitter.com/{}">@{}</a>',
                self.twitter_username,
                self.twitter_username,
            )
        return None
    admin_twitter_tag.short_description = 'Twitter'

    def admin_github_tag(self):
        if self.github_username:
            return format_html(
                '<a href="https://github.com/{}">{}</a>',
                self.github_username,
                self.github_username,
            )
        return None
    admin_github_tag.short_description = 'Github'

class OrganizationAdmin(CachingMixin, models.Model):
    created = models.DateTimeField(auto_now_add=True)
    modified = models.DateTimeField(auto_now=True)
    organization = models.ForeignKey(Organization, on_delete=models.CASCADE)
    email = models.EmailField('Email address', unique=True)
    objects = models.Manager()

    class Meta:
        ordering = ('organization', 'email',)
        verbose_name = 'Organization Admin'
        verbose_name_plural = 'Organization Admins - These email addresses will be able to log in and manage job postings for this organization'
        
    def __str__(self):
        return '%s: %s' % (self.organization.name, self.email)
        
    def clean(self):
        for field in self._meta.fields:
            if isinstance(field, (models.CharField, models.TextField)):
                setattr(self, field.name, getattr(self, field.name).strip())

class OrganizationLink(CachingMixin, models.Model):
    created = models.DateTimeField(auto_now_add=True)
    modified = models.DateTimeField(auto_now=True)
    organization = models.ForeignKey(Organization, on_delete=models.CASCADE)
    name = models.CharField(max_length=128)
    url = models.URLField()
    objects = models.Manager()

    class Meta:
        ordering = ('organization', 'name',)
        verbose_name = 'Organization Link'

    def __str__(self):
        return '%s: %s' % (self.organization.name, self.name)


@receiver(post_save, sender=Person)
@disable_for_loaddata
def clear_caches_for_person(sender, instance, **kwargs):
    # clear cache for person detail page
    expire_page_cache(instance.get_absolute_url())

    # clear cache for person list page
    expire_page_cache(reverse('person_list'))

    # clear cache for community page
    expire_page_cache(reverse('community_list'))

    # clear caches for related articles
    for article in instance.get_live_article_set():
        expire_page_cache(article.get_absolute_url())
        expire_page_cache(reverse('article_list'))
        
        #if article.section.slug:
        #    expire_page_cache(reverse(
        #        'article_list_by_section',
        #        kwargs = { 'section': article.section.slug }
        #    ))
        #if article.category:
        #    expire_page_cache(reverse(
        #        'article_list_by_category',
        #        kwargs = { 'category': article.category.slug }
        #    ))

    for article in instance.get_live_article_authored_set():
        expire_page_cache(article.get_absolute_url())
        expire_page_cache(reverse('article_list'))
        
        #if article.section.slug:
        #    expire_page_cache(reverse(
        #        'article_list_by_section',
        #        kwargs = { 'section': article.section.slug }
        #    ))
        #if article.category:
        #    expire_page_cache(reverse(
        #        'article_list_by_category',
        #        kwargs = { 'category': article.category.slug }
        #    ))

    # clear caches for related organizations
    for organization in instance.get_live_organization_set():
        expire_page_cache(organization.get_absolute_url())

    # clear caches for related code index entries
    for code in instance.get_live_code_set():
        expire_page_cache(code.get_absolute_url())


@receiver(post_save, sender=Organization)
@disable_for_loaddata
def clear_caches_for_organization(sender, instance, **kwargs):
    # clear cache for organization detail page
    expire_page_cache(instance.get_absolute_url())

    # clear cache for organization list page
    expire_page_cache(reverse('organization_list'))
    
    # clear cache for community page
    expire_page_cache(reverse('community_list'))

    # clear caches for related articles
    for article in instance.get_live_article_set():
        expire_page_cache(article.get_absolute_url())
        expire_page_cache(reverse('article_list'))
        
        #if article.section.slug:
        #    expire_page_cache(reverse(
        #        'article_list_by_section',
        #        kwargs = { 'section': article.section.slug }
        #    ))
        #if article.category:
        #    expire_page_cache(reverse(
        #        'article_list_by_category',
        #        kwargs = { 'category': article.category.slug }
        #    ))

    # clear caches for related people
    for person in instance.get_live_person_set():
        expire_page_cache(person.get_absolute_url())

    # clear caches for related code index entries
    for code in instance.get_live_code_set():
        expire_page_cache(code.get_absolute_url())

@receiver(post_save, sender=OrganizationAdmin)
@disable_for_loaddata
def update_org_admin_user(sender, instance, **kwargs):
    # make sure there's a User record associated with each OrganizationAdmin
    get_or_create_user(instance.email)

@receiver(post_delete, sender=OrganizationAdmin)
def delete_org_admin_user(sender, instance, **kwargs):
    # make sure we don't have orphan User records when
    # an OrganizationAdmin gets deleted
    try:
        admin = User.objects.get(username__iexact=instance.email)
        admin.delete()
    except:
        pass
        