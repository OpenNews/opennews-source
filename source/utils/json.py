import json

from django.http import JsonResponse
from django.utils.functional import Promise
from django.utils.encoding import force_text
from django.core.serializers.json import DjangoJSONEncoder

class LazyEncoder(DjangoJSONEncoder):
    def default(self, obj):
        if isinstance(obj, Promise):
            return force_text(obj)
        return super(LazyEncoder, self).default(obj)

def render_json_to_response(context):
    '''
    Utility method for rendering a view's data to JSON response.
    '''
    result = json.dumps(context, sort_keys=False, indent=4, cls=LazyEncoder)
    return JsonResponse(result, safe=False)
