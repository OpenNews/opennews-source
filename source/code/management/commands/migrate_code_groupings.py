from django.conf import settings
from django.core.management.base import BaseCommand

from source.code.models import Code

class Command(BaseCommand):
    help = "One-time command to populate new `grouping` field on Code model"
    def handle(self, *args, **options):
        code_list = Code.objects.all()

        for code in code_list:
            print("\nmigrating " + code.name)

            try:
                tag_for_grouping = code.concept_tags.all()[0]
            except:
                try:
                    tag_for_grouping = code.technology_tags.all()[0]
                except:
                    tag_for_grouping = None
            
            if tag_for_grouping:
                print("adding to group " + tag_for_grouping.name)
                code.grouping = tag_for_grouping.name
                code.save()
