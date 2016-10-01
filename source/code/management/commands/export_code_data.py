import io
import json
from collections import OrderedDict

from django.conf import settings
from django.core.management.base import BaseCommand

from source.code.models import Code

class Command(BaseCommand):
    help = 'Export Code data.'
    def handle(self, *args, **options):
        code_list = Code.objects.filter(is_live=True)
        code_exports = []

        for code in code_list:
            values = OrderedDict()
            values['name'] = code.name.strip()
            values['description'] = code.description.strip().replace('\n', ' ').replace('\r', '')
            values['url'] = code.url.strip()
            values['organizations'] = ', '.join([org.name.strip() for org in code.get_live_organization_set()])
            values['people'] = ', '.join([person.__str__().strip() for person in code.get_live_person_set()])
            values['tags'] = ', '.join([tag.name.strip() for tag in code.merged_tag_list])

            code_exports.append(values)

        json_out = json.dumps(code_exports, sort_keys=False, indent=4, ensure_ascii=False)
        with io.open('code_data.json', 'w', encoding='utf8') as outfile:
            outfile.write(json_out)

        print('Export complete')
