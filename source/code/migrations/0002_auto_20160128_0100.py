# -*- coding: utf-8 -*-
# Generated by Django 1.9.1 on 2016-01-28 01:00
from __future__ import unicode_literals

from django.db import migrations, models
import taggit.managers


class Migration(migrations.Migration):

    initial = True

    dependencies = [
        ('code', '0001_initial'),
        ('taggit', '0002_auto_20150616_2121'),
        ('tags', '0001_initial'),
        ('people', '0001_initial'),
    ]

    operations = [
        migrations.AddField(
            model_name='code',
            name='concept_tags',
            field=taggit.managers.TaggableManager(blank=True, help_text='A comma-separated list of tags describing relevant concepts', through='tags.ConceptTaggedItem', to='tags.ConceptTag', verbose_name='Concept Tags'),
        ),
        migrations.AddField(
            model_name='code',
            name='organizations',
            field=models.ManyToManyField(blank=True, to='people.Organization'),
        ),
        migrations.AddField(
            model_name='code',
            name='people',
            field=models.ManyToManyField(blank=True, to='people.Person'),
        ),
        migrations.AddField(
            model_name='code',
            name='tags',
            field=taggit.managers.TaggableManager(blank=True, help_text='Automatic combined list of Technology Tags and Concept Tags, for easy searching', through='taggit.TaggedItem', to='taggit.Tag', verbose_name='Tags'),
        ),
        migrations.AddField(
            model_name='code',
            name='technology_tags',
            field=taggit.managers.TaggableManager(blank=True, help_text='A comma-separated list of tags describing relevant technologies', through='tags.TechnologyTaggedItem', to='tags.TechnologyTag', verbose_name='Technology Tags'),
        ),
    ]
