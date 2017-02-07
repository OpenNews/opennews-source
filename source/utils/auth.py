from urllib.parse import urlunparse

from django.conf import settings
from django.contrib.auth import authenticate, login
from django.contrib.auth import backends as auth_backends
from django.contrib.auth.models import User, AnonymousUser
from django.contrib.auth.hashers import make_password
from django.shortcuts import redirect

from sesame.backends import UrlAuthBackendMixin

try:
    from django.utils.deprecation import MiddlewareMixin
except ImportError:
    MiddlewareMixin = object

TOKEN_NAME = getattr(settings, 'SESAME_TOKEN_NAME', 'url_auth_token')


def get_or_create_user(email):
    user, created = User.objects.get_or_create(
        username__iexact=email, email__iexact=email,
        defaults={'username': email, 'email': email,}
    )

    if created:
        randomize_user_password(user)
    
    return user

def get_random_password():
    password = User.objects.make_random_password(length=16)
    
    return make_password(password)
    
def randomize_user_password(user):
    password = get_random_password()
    
    user.password = password
    user.save()
    
    return user

class SesameModelBackend(UrlAuthBackendMixin, auth_backends.ModelBackend):
    """
    Authenticates against a token containing a signed user id.
    """
    def authenticate(self, url_auth_token=None):
        """
        Check the token and return the corresponding user.
        
        Modifies sesame.backends.ModelBackend by randomizing
        password after email logins.
        """
        try:
            user = self.parse_token(url_auth_token)

            # randomize password after email login
            if user and not user.is_staff:
                randomize_user_password(user)
            
            return user
            
        except TypeError:
            backend = "%s.%s" % (self.__module__, self.__class__.__name__)
            logger.exception("TypeError in %s, here's the traceback before "
                             "Django swallows it:", backend)
            raise

class SesameAuthenticationMiddleware(MiddlewareMixin):
    def process_request(self, request):
        """
        Log user in if if `request` contains a valid login token.
        """            
        token = request.GET.get(TOKEN_NAME)

        if token is None:
            return

        user = authenticate(url_auth_token=token)

        # strip the sesame auth token querystring param
        # from the URL and forward user to base location
        get_params = request.GET.copy()
        del get_params[TOKEN_NAME]
        stripped_url = urlunparse(
            ('', '', request.path, '', get_params.urlencode(), '',)
        )
        redirect_url = redirect(stripped_url)
        
        if user is None:
            return redirect_url

        # If the sessions framework is enabled and the token is valid,
        # persist the login in session.
        if hasattr(request, 'session') and user is not None:
            login(request, user)

        # If the authentication middleware isn't enabled, set request.user.
        # (This attribute is overwritten by the authentication middleware
        # if it runs after this one.)
        if not hasattr(request, 'user'):
            request.user = user if user is not None else AnonymousUser()
        
        return redirect_url
