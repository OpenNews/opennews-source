# -*- coding: utf-8 -*-
# Generated by Django 1.10.1 on 2017-01-17 19:04
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('code', '0003_auto_20161213_1755'),
    ]

    operations = [
        migrations.AlterField(
            model_name='code',
            name='demo_site',
            field=models.URLField(blank=True, verbose_name='Demo site URL'),
        ),
    ]
