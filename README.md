# opennews-source

The code that runs the [Source website](https://source.opennews.org), a project from [OpenNews](https://opennews.org).

[See the project documentation](/docs)

### When we update
1. Pushing to master will live attempt a staging Heroku deploy
2. Check out our staging URL.
3. Log into the staging db the same way we log into the normal db.
4. To go from staging to master, within Heroku you "promote to production" on the staging app

### When visiting staging throws an error
Try logging into the DB, change any article's pubdate to today, and refresh.
