# -*- coding: utf-8 -*-
from __future__ import unicode_literals
from django.contrib.auth import get_user_model
from django.contrib.auth.models import Group
from django.utils.translation import ugettext as _

from source.people.models import Organization


UserModel = get_user_model()

# user profile keys that are always present as specified by
# https://auth0.com/docs/user-profile/normalized#normalized-user-profile-schema
AUTH0_USER_INFO_KEYS = [
    'name',
    'nickname',
    'picture',
    'user_id',
]

class Auth0Backend(object):
    '''
    Modified from django-auth0's `Auth0Backend`:
    https://github.com/imanhodjaev/django-auth0/blob/master/django_auth0/auth_backend.py
    
    Source uses Auth0's "magic link" email authentication to log in users
    who post new Job records. This version of `Auth0Backend` creates new User
    records that store the email address used to log in, so the Jobs workflow
    can associate logged-in users with their proper posting privileges.
    '''
    def authenticate(self, **kwargs):
        """
        Auth0 return a dict which contains the following fields
        :param kwargs: user information provided by auth0
        :return: user
        """
        # check that each auth0 key is present in kwargs
        for key in AUTH0_USER_INFO_KEYS:
            if key not in kwargs:
                # End the authentication attempt if this is not an Auth0
                # payload.
                return

        # MODIFIED FROM ORIGINAL `Auth0Backend`
        if 'email' not in kwargs:
            # Source only uses "magic link" auth via email,
            # so this key should be present
            # https://auth0.com/docs/connections/passwordless/spa-email-link
            return

        email = kwargs.get('email', None)

        if not email:
            raise ValueError(_('email can\'t be blank!'))
            
        try:
            return UserModel.objects.get(email__iexact=email)
        except UserModel.DoesNotExist:
            return self.create_auth_user(email)
        # END MODIFICATIONS

    # NEW METHOD, ADDITION TO ORIGINAL `Auth0Backend
    def create_auth_user(self, email):
        new_user = None
        # seek matching organization for new user
        try:
            # make sure we have a matching organization before creating
            # user record so we don't have orphans
            matching_organization = Organization.objects.get(email__iexact=email)
            organization_admin_group, created = Group.objects.get_or_create(name='Organization Admins')
            new_user = UserModel.objects.create_user(username=email, email=email)
            new_user.groups.add(organization_admin_group)
        except:
            # TODO raise error message for no matching org
            pass
        
        return new_user

    # noinspection PyProtectedMember
    def get_user(self, user_id):
        """
        Primary key identifier
        It is better to raise UserModel.DoesNotExist
        :param user_id:
        :return: UserModel instance
        """
        return UserModel._default_manager.get(pk=user_id)
