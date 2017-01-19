from django.core.management.base import BaseCommand
from source.people.models import Organization, OrganizationAdmin

class Command(BaseCommand):
    help = "One-time command to migrate org admin emails to new OrganizationAdmin model"
    def handle(self, *args, **options):
        org_set = Organization.objects.all()
        
        for org in org_set:
            print("\nMigrating " + org.name)
            if org.email:
                obj, created = OrganizationAdmin.objects.get_or_create(organization=org, email=org.email)
            else:
                print("No email for this org")