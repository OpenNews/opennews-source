'''
Collects new job listings and posts them to Twitter. This should be run
via cron, probably on an hourly basis during normal daylight hours.

This task fetches any job record where:
- `is_live` is True
- the current time falls between `listing_start_date` and `listing_end_date`
- the `tweeted_at` timestamp is empty

As this task posts jobs to Twitter, it updates the record's `tweeted_at`
timestampe, so it won't get posted next time the job runs. This lets us
set up the cron however we like, and it will always get the latest batch
of jobs that haven't been tweeted yet.
'''
from datetime import datetime
import oauth2 as oauth
import random
import urllib

from django.conf import settings
from django.core.management.base import BaseCommand
from django.core.urlresolvers import reverse

from source.jobs.models import Job

LOG_PREFIX = 'TWEET_NEW_JOBS'
CONSUMER_KEY = settings.JOBS_TWITTER_CONSUMER_KEY
CONSUMER_SECRET = settings.JOBS_TWITTER_CONSUMER_SECRET
ACCESS_KEY = settings.JOBS_TWITTER_ACCESS_TOKEN
ACCESS_SECRET = settings.JOBS_TWITTER_ACCESS_TOKEN_SECRET


class Command(BaseCommand):
    help = 'Posts new job listings to Twitter.'
    def handle(self, *args, **options):
        print('{} - started posting: {}'.format(LOG_PREFIX, datetime.now()))
        
        # set up Twitter credentials for our API calls
        consumer = oauth.Consumer(key=CONSUMER_KEY, secret=CONSUMER_SECRET)
        access_token = oauth.Token(key=ACCESS_KEY, secret=ACCESS_SECRET)
        client = oauth.Client(consumer, access_token)
        api_endpoint = 'https://api.twitter.com/1.1/statuses/update.json'

        # get up to three Job records that are live, within proper time frame,
        # but have not been posted to Twitter yet. oldest records first
        jobs = Job.live_objects.filter(tweeted_at=None).order_by('listing_start_date')[:2]

        # loop through our queryset
        for job in jobs:
            try:
                # build the tweet
                job_url = '{}{}#job-{}'.format(settings.BASE_SITE_URL, reverse('job_list'), job.pk)
                tweet = make_tweet(job.organization.name, job.name, job_url)
                
                if settings.DEBUG:
                    # for testing
                    tweet = "TEST POST: {}".format(tweet)
                    print(tweet)
                else:
                    # post the tweet to Twitter
                    try:
                        post_tweet(tweet)
                    except oauth.Error as err:
                        print('{} - TWITTER ERROR: {}'.format(LOG_PREFIX, err))
                
                    # update `tweeted_at` timestamp so this record
                    # won't be picked up in queryset on next run
                    job.tweeted_at = datetime.now()
                    job.save()

                    print('Succesful update: %s' % tweet)

            except:
                print('ERROR: %s' % job)
                pass

        print('{} - finished posting: {}'.format(LOG_PREFIX, datetime.now()))

TWEET_CONSTRUCTS = [
    ('New job listing from %s: %s.', ('org', 'job')),
    ('Job opening at %s: %s.', ('org', 'job')),
    ('%s is hiring. See the %s listing:', ('org', 'job')),
    ('New on the @source jobs page: %s opening at %s.', ('job', 'org')),
    ('%s job listing posted by %s.', ('job', 'org')),
    ('%s opening at %s.', ('job', 'org')),
    ('%s? %s is hiring:', ('job', 'org')),
    ('%s listing on the @source jobs page. %s is hiring:', ('job', 'org')),
]

def make_tweet(org_name, job_name, job_url):
    # stash the variables for our madlib
    tweet_data = {
        'org': org_name,
        'job': job_name,
        'url': job_url
    }

    # get a random tweet template, along with order of org name and job name
    tweet_template, template_vars = TWEET_CONSTRUCTS[random.randrange(len(TWEET_CONSTRUCTS))]
    first, second = template_vars
    
    # build the tweet, then append the url
    tweet = tweet_template % (tweet_data[first], tweet_data[second])
    tweet = '%s %s' % (tweet, tweet_data['url'])
    
    # if we have a particularly long job title, fall back to a simpler version
    if len(tweet) > 140:
        tweet = '%s: %s. %s' % (tweet_data['org'], tweet_data['job'], tweet_data['url'])
    if len(tweet) > 140:
        tweet = 'New job listing from %s: %s' % (tweet_data['org'], tweet_data['url'])
    
    return tweet

def post_tweet(tweet):
    response, content = client.request(
        api_endpoint, method='POST',
        body = urllib.parse.urlencode({
            'status': tweet,
            'wrap_links': True
        }),
    )
    