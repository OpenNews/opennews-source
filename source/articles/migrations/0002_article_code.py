# -*- coding: utf-8 -*-
# Generated by Django 1.9.1 on 2016-01-28 01:00
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
        ('code', '0001_initial'),
        ('articles', '0001_initial'),
    ]

    operations = [
        migrations.AddField(
            model_name='article',
            name='code',
            field=models.ManyToManyField(blank=True, to='code.Code'),
        ),
    ]
