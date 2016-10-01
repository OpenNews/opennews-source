import io
import json
from collections import OrderedDict

from django.conf import settings
from django.core.management.base import BaseCommand

from source.people.models import Person, Organization

class Command(BaseCommand):
    help = 'Export Person and Organization data.'
    def handle(self, *args, **options):
        person_list = Person.objects.filter(is_live=True)
        person_exports = []

        for person in person_list:
            values = OrderedDict()
            values['first_name'] = person.first_name.strip()
            values['last_name'] = person.last_name.strip()
            values['email'] = person.email.strip()
            values['twitter_username'] = person.twitter_username.strip()
            values['github_username'] = person.github_username.strip()
            values['organizations'] = ', '.join([org.name.strip() for org in person.get_live_organization_set()])

            person_exports.append(values)

        json_out = json.dumps(person_exports, sort_keys=False, indent=4, ensure_ascii=False)
        with io.open('person_data.json', 'w', encoding='utf8') as outfile:
            outfile.write(json_out)

        org_list = Organization.objects.filter(is_live=True)
        org_exports = []

        for org in org_list:
            values = OrderedDict()
            values['name'] = org.name.strip()
            values['twitter_username'] = org.twitter_username.strip()
            values['github_username'] = org.github_username.strip()
            values['people'] = ', '.join([person.__str__().strip() for person in org.get_live_person_set()])

            org_exports.append(values)

        json_out = json.dumps(org_exports, sort_keys=False, indent=4, ensure_ascii=False)
        with io.open('organization_data.json', 'w', encoding='utf8') as outfile:
            outfile.write(json_out)

        print('Export complete')
