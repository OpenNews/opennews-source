from django import forms

REPO_DIFFICULTY_CHOICES = [
    ('1', 'Super easy'), ('2', 'Pretty easy'), ('3', 'A little tricky'), ('4', 'Kinda hard'), 
]

class SuggestRepoForm(forms.Form):
    repo_submitter_name = forms.CharField(label='Name', max_length=128, required=True)
    repo_submitter_email = forms.EmailField(label='Email', required=True)
    repo_name = forms.CharField(max_length=128, required=True)
    repo_type = forms.CharField(max_length=128, required=True)
    repo_purpose = forms.CharField(max_length=256, required=True)
    repo_credits = forms.CharField(max_length=128, required=True)
    repo_difficulty = forms.ChoiceField(choices=REPO_DIFFICULTY_CHOICES, required=False)
    repo_prerequisites = forms.CharField(max_length=256, required=False)
    repo_description = forms.CharField(widget=forms.Textarea(attrs={'rows': 10, 'cols': 30}), required=False)