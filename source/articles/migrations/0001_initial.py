# -*- coding: utf-8 -*-
# Generated by Django 1.9.1 on 2016-01-28 01:00
from __future__ import unicode_literals

import caching.base
import datetime
from django.db import migrations, models
import django.db.models.deletion
import sorl.thumbnail.fields


class Migration(migrations.Migration):

    initial = True

    dependencies = [
        ('people', '0001_initial'),
    ]

    operations = [
        migrations.CreateModel(
            name='Article',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('created', models.DateTimeField(auto_now_add=True)),
                ('modified', models.DateTimeField(auto_now=True)),
                ('is_live', models.BooleanField(default=True, verbose_name='Display on site')),
                ('show_in_lists', models.BooleanField(default=True, verbose_name='Show in lists')),
                ('allow_comments', models.BooleanField(default=True, verbose_name='Allow comments')),
                ('title', models.CharField(max_length=128)),
                ('slug', models.SlugField(unique=True)),
                ('pubdate', models.DateTimeField(default=datetime.datetime.now)),
                ('subhead', models.CharField(max_length=128)),
                ('image', sorl.thumbnail.fields.ImageField(blank=True, help_text='Resized to fit 100% column width in template', null=True, upload_to='img/uploads/article_images')),
                ('image_caption', models.TextField(blank=True)),
                ('image_credit', models.CharField(blank=True, help_text='Optional. Will be appended to end of caption in parens. Accepts HTML.', max_length=128)),
                ('body', models.TextField()),
                ('summary', models.TextField()),
                ('article_type', models.CharField(blank=True, max_length=32)),
                ('disable_auto_linebreaks', models.BooleanField(default=False, help_text='Check this if body and article blocks already have HTML paragraph tags.')),
                ('article_js_header', models.TextField(blank=True)),
                ('article_js_footer', models.TextField(blank=True)),
                ('authors', models.ManyToManyField(blank=True, related_name='article_authors', to='people.Person')),
            ],
            options={
                'ordering': ('-pubdate', 'title'),
            },
            bases=(caching.base.CachingMixin, models.Model),
        ),
        migrations.CreateModel(
            name='ArticleBlock',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('created', models.DateTimeField(auto_now_add=True)),
                ('modified', models.DateTimeField(auto_now=True)),
                ('title', models.CharField(max_length=128)),
                ('slug', models.SlugField()),
                ('order', models.PositiveIntegerField(default=1)),
                ('image', sorl.thumbnail.fields.ImageField(blank=True, null=True, upload_to='img/uploads/article_images')),
                ('image_presentation', models.CharField(blank=True, choices=[('full-width', 'Full-Width Above Text'), ('full-width-below', 'Full-Width Below Text'), ('inset-left', 'Inset Left'), ('inset-right', 'Inset Right')], max_length=24)),
                ('image_caption', models.TextField(blank=True)),
                ('image_credit', models.CharField(blank=True, help_text='Optional. Will be appended to end of caption in parens. Accepts HTML.', max_length=128)),
                ('body', models.TextField()),
                ('article', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='articles.Article')),
            ],
            options={
                'verbose_name': 'Article Block',
                'ordering': ('article', 'order', 'title'),
            },
            bases=(caching.base.CachingMixin, models.Model),
        ),
        migrations.CreateModel(
            name='Category',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('created', models.DateTimeField(auto_now_add=True)),
                ('modified', models.DateTimeField(auto_now=True)),
                ('name', models.CharField(max_length=64)),
                ('slug', models.SlugField()),
            ],
            options={
                'verbose_name_plural': 'Categories',
                'ordering': ('section', 'name'),
            },
            bases=(caching.base.CachingMixin, models.Model),
        ),
        migrations.CreateModel(
            name='Section',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('created', models.DateTimeField(auto_now_add=True)),
                ('modified', models.DateTimeField(auto_now=True)),
                ('name', models.CharField(max_length=64)),
                ('slug', models.SlugField()),
                ('description', models.TextField(blank=True, help_text='Optional text to add at top of page. (Shows on promo template only.)')),
                ('gets_promo_items', models.BooleanField(default=False, help_text='Check this to use special template with three promo cards at top.')),
                ('special_template', models.CharField(blank=True, max_length=255)),
            ],
            options={
                'ordering': ('name',),
            },
            bases=(caching.base.CachingMixin, models.Model),
        ),
        migrations.AddField(
            model_name='category',
            name='section',
            field=models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='articles.Section'),
        ),
        migrations.AddField(
            model_name='article',
            name='category',
            field=models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='articles.Category'),
        ),
    ]
