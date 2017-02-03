from django import forms

class SuggestArticleForm(forms.Form):
    article_submitter_name = forms.CharField(label='Name', max_length=128, required=True)
    article_submitter_email = forms.EmailField(label='Email', required=True)
    article_description = forms.CharField(widget=forms.Textarea(attrs={'rows': 5, 'cols': 30}), required=True)
    article_draft = forms.CharField(widget=forms.Textarea(attrs={'rows': 10, 'cols': 30}), required=False)
