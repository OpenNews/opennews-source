from django.contrib.auth.models import User
from django.contrib.auth.hashers import make_password

def get_or_create_user(email):
    password = randomize_password()
    user, created = User.objects.get_or_create(username=email, email=email, password=password)
    
    return user

def randomize_password():
    password = User.objects.make_random_password(length=16)
    
    return make_password(password)