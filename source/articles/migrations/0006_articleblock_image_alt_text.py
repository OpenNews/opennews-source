# -*- coding: utf-8 -*-
# Generated by Django 1.10.3 on 2022-02-21 15:06
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('articles', '0005_auto_20170206_2215'),
    ]

    operations = [
        migrations.AddField(
            model_name='articleblock',
            name='image_alt_text',
            field=models.TextField(blank=True),
        ),
    ]
