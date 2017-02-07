from django.contrib import admin

from .models import Person, PersonLink, Organization, OrganizationLink, OrganizationAdmin
#from sorl.thumbnail.admin import AdminImageMixin
from source.utils.widgets.thumbnail import AdminImageMixin

class PersonLinkInline(admin.StackedInline):
    model = PersonLink
    extra = 1
    fieldsets = (
        ('', {'fields': (('name', 'url'),)}),
    )
    
    def formfield_for_dbfield(self, db_field, **kwargs):
        # More usable width in admin form field for names
        field = super(PersonLinkInline, self).formfield_for_dbfield(db_field, **kwargs)
        if db_field.name == 'name':
            field.widget.attrs['style'] = 'width: 30em;'
        return field

class PersonAdmin(admin.ModelAdmin):
    save_on_top = True
    prepopulated_fields = {'slug': ('first_name', 'last_name')}
    list_filter = ('is_live', 'show_in_lists',)
    list_display = ('name', 'is_live', 'show_in_lists', 'admin_email_tag', 'admin_twitter_tag', 'admin_github_tag', 'admin_image_tag',)
    list_editable = ('is_live', 'show_in_lists',)
    filter_horizontal = ('organizations',)
    search_fields = ('first_name', 'last_name', 'description',)
    fieldsets = (
        ('', {'fields': (('first_name', 'last_name', 'slug'), ('is_live', 'show_in_lists'), 'email', 'photo', 'description',)}),
        ('Accounts', {'fields': ('twitter_username', 'twitter_bio', 'twitter_profile_image_url', 'github_username', ('github_repos_num', 'github_gists_num'),)}),
        ('Related objects', {'fields': ('organizations',)}),
    )
    inlines = [PersonLinkInline,]

class OrganizationLinkInline(admin.StackedInline):
    model = OrganizationLink
    extra = 1
    fieldsets = (
        ('', {'fields': (('name', 'url',),)}),
    )
    
    def formfield_for_dbfield(self, db_field, **kwargs):
        # More usable width in admin form field for names
        field = super(OrganizationLinkInline, self).formfield_for_dbfield(db_field, **kwargs)
        if db_field.name == 'name':
            field.widget.attrs['style'] = 'width: 30em;'
        return field

class OrganizationAdminInline(admin.StackedInline):
    model = OrganizationAdmin
    extra = 1
    fieldsets = (
        ('', {'fields': ('email',),}),
    )
    
class OrgAdmin(AdminImageMixin, admin.ModelAdmin):
    save_on_top = True
    prepopulated_fields = {'slug': ('name',)}
    list_filter = ('is_live', 'country', 'state',)
    list_display = ('name', 'is_live', 'show_in_lists', 'admin_image_tag', 'location', 'admin_twitter_tag', 'admin_github_tag', 'admin_count')
    list_editable = ('is_live', 'show_in_lists',)
    search_fields = ('name', 'description', 'city', 'state', 'country', 'organizationadmin__email',)
    fieldsets = (
        ('', {'fields': (('name', 'slug'), ('is_live', 'show_in_lists'), 'email', 'twitter_username', 'github_username', ('github_repos_num', 'github_gists_num'), 'homepage', 'logo', 'description',)}),
        ('Location', {'fields': ('address', ('city', 'state',), 'country',)}),
    )
    inlines = [OrganizationAdminInline, OrganizationLinkInline,]
            
admin.site.register(Person, PersonAdmin)
admin.site.register(Organization, OrgAdmin)
