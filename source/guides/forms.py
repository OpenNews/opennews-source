from django import forms

class SuggestGuideForm(forms.Form):
    guide_submitter_name = forms.CharField(label='Name', max_length=128, required=True)
    guide_submitter_email = forms.EmailField(label='Email', required=True)
    guide_description = forms.CharField(widget=forms.Textarea(attrs={'rows': 10, 'cols': 30}), required=True)
    guide_purpose = forms.CharField(widget=forms.Textarea(attrs={'rows': 5, 'cols': 30}), required=False)
