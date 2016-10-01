from functools import wraps

from django.conf import settings
from django.core.exceptions import PermissionDenied
from django.core.paginator import Paginator, InvalidPage
from django.http import Http404


def paginate(request, queryset, results_per_page=20):
    paginator = Paginator(queryset, results_per_page)

    try:
        page = paginator.page(int(request.GET.get('page', 1)))
    except InvalidPage:
        raise Http404("Sorry, that page of results does not exist.")
    except ValueError:
        raise PermissionDenied()
        
    return page, paginator

def disable_for_loaddata(signal_handler):
    @wraps(signal_handler)
    def wrapper(*args, **kwargs):
        if kwargs['raw']:
            print("Skipping signal for {0} {1}".format(args, kwargs))
            return
        signal_handler(*args, **kwargs)
    return wrapper