from django import forms

class SuggestGuideForm(forms.Form):
    name = forms.CharField(label='Name', max_length=100, required=True)
