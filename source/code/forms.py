from django import forms

class SuggestRepoForm(forms.Form):
    name = forms.CharField(label='Name', max_length=100, required=True)
