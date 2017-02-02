# opennews-source

An updated version of the CMS behind OpenNews' Source website.

## Preparing to edit the theme

To install the requisite software needed to maintain the theme, install [Node](http://nodejs.org/). (There’s [a handy walkthrough video](https://docs.npmjs.com/getting-started/installing-node), if that’s helpful.) Then, run this in the repo root:

```
npm install
```

Then, you can _build_ the site by typing this:

```
grunt
```

`grunt` is a task runner we’re using to automate various, uh, tasks: whenever it’s run, it will concatenate various files, compress them, and run a few other tasks to keep the site as lightweight as possible. (More on that below.)

Additionally, we’ve included [Browsersync](https://www.browsersync.io/) for autoreload purposes. If that’s not welcome, that’s totally ditchable.

## Preparing to edit the theme

As it stands, the templates structure is fairly flat right now. Inside the `tmpl/` folder, we have:

- Inside `scss/` we’ve got all the [Sass](http://sass-lang.com/) partials that power the site. We’re not using a _ton_ of Sass’ functionality—mainly for [light file organizational work](https://github.com/OpenNews/opennews-source/blob/master/tmpl/scss/source.scss), and [a few variables](https://github.com/OpenNews/opennews-source/blob/master/tmpl/scss/global/_variables.scss)—but feel free to add more.
    - Generally, [most of the site’s styles are in `_core.css`](https://github.com/OpenNews/opennews-source/blob/master/tmpl/scss/core/_core.scss). But the structure should hopefully be fairly transparent.
- `js/` is where our JavaScript’s found. As you’ll see in our `Gruntfile`, our JavaScript’s assembled from a bunch of tiny files into an `initial.js` (`concat.js_initial.src[]`) and a `main.js` (`concat.js_main.src[]`). (More on this split below.)
    - Project-level configuration is included in `config.js`.
    - If you need utilities and helper functions to be accessible throughout the theme, `utils.js` is a decent place to drop them.
- `svg/` is where you should store all icons used on the front-end. We’re using [grunticon](https://github.com/filamentgroup/grunticon) to produce SVG icons for the site, with PNG fallbacks for older browsers that don’t understand SVGs. (Yep, there’re still plenty out there.) If you need to add a new icon, drop it in the `tmpl/svg/` directory, and run `grunt`.
- The theme itself doesn’t use many raster images, but when it does, they live in `img/`.

Both `tmpl/scss/` and `tmpl/css/` contain a `lib/` directory, which is where publicly available, third-party libraries can be found.

Any `grunt` operation will package distribution-ready files up, and deposit them in a `dist/` folder. The location of that folder is, at the moment, `source/base/static/base/_v2/dist/`—to change that, edit `_config.dir.output` in our `Gruntfile`.

### Icons

To add a new icon to the codebase:

1. Save the SVG for the icon in the `tmpl/svg/` folder.
  - We use `#4D4D4D` for our icons’ color, and they should be 20×20px or smaller.
2. Run `grunt` or `grunt grunticon` from the command line.

To incorporate your new icon into a page:

1. Note the name of the file you created. This is how you’ll refer to it in the templates.
2. Add the filename to a given element’s `class`, prefixed with `icon-`.
  - If the filename is `location.svg`, then add `class="icon-location"` to the element you’d like to which you’re attaching the icon. (e.g., `<span class="icon-location">…</span>`)
  - We have a `has-icon` helper class that adds a little left-edge padding to elements that, uh, have icons. (e.g., `<span class="has-icon icon-location">…</span>`)

If you can’t attach a class to an element, there is a `grunticon.svg.options.customselectors` object in `Gruntfile.js`, where you can map CSS selectors to specific icons.

## Maintaining the Front-End

From a front-end standpoint, Source’s templates are built with two design principles in mind:

1. Serve advanced styles and scripts _only_ to advanced browsers.
2. Get content into the browser as quickly as possible.

Let’s cover those in order.

### Serve advanced code _only_ to advanced browsers

If you open up `tmpl/js/initial.js`, you’ll see this a little more than halfway down:

```
if ( !( "querySelector" in document
    && "addEventListener" in window
    && "sessionStorage" in window
) ) {
    return;
}
```

This asks the browser if it’s “sufficiently modern”, by looking for specific features we’ll use in the design. If it fails that little test, then the browser stops executing the JavaScript. But! If the browser _passes_ the test, then a class of `.enhanced` is applied to the opening `<html>` tag, and more advanced styles and scripts are loaded.

In other words, we’re serving a baseline, lightweight design to every browser. But if they pass that test, we’ll upgrade them to the full responsive design.

This process is colloquially known as “[cutting the mustard](http://responsivenews.co.uk/post/18948466399/cutting-the-mustard)”, but is also a form of _[progressive enhancement](https://en.wikipedia.org/wiki/Progressive_enhancement)_. But more practically, it lets us focus on designing for more modern browsers and devices (like Chrome, Firefox, Safari, and Android), while still delivering a _usable_ design to less modern ones (like older BlackBerry devices, older but still-popular versions of Android, IE7, and the like).

If you spend some time in the CSS, you’ll probably see instances of this throughout. For example:

```
.header-main {
    display: flex;
    text-align: center;
    margin-bottom: 0.5em;
}
.enhanced .header-main {
    text-align: left;
    margin-bottom: 0;
}
```

This sets a baseline style on the `.header-main` element, but _if_ we’re in a “modern” browser, we can use the `.enhanced` class to apply more advanced rules.

While there are helper classes throughout the CSS that perform a similar function (e.g., `.supports-flex`), the model is the same throughout the entire theme. We begin by designing and building a usable baseline, and enhance conditionally from there.

### Get content into the browser as quickly as possible (or, “Performance, Performance, Performance!”)

Additionally, we should keep the front-end _fast_. As a result, we’ve tried to minimize the number of _blocking_ requests, and get the content into the page as early as possible.

To achieve this, we’re inlining as much code as possible. Namely:

1. We’re writing [critical CSS](http://www.smashingmagazine.com/2015/08/understanding-critical-css/) into the `head` of each page, and then using a little JavaScript to fetch the full stylesheet. (We’re using Filament Group’s [criticalCSS utility](https://github.com/filamentgroup/criticalCSS) to manage this for us whenever `grunt` runs.)
   - **Note:** This assumes there’s a local web server capable of viewing the templates. Per the `Gruntfile`, that’s currently set to `http://local.source/tmpl/`—if you use a different domain, please do change it!
2. As part of the “cut the mustard” technique above, we’re loading our full JavaScript _only_ in advanced browsers. And we’re doing so in a deferred manner, so that it doesn’t prevent other files from downloading.

If there are JavaScript libraries that need to be used on a decent number of pages, it might be worth adding them to `concat.js_main.src[]` in our `Gruntfile.js`. That’ll add them to `main.js`, which gets loaded asynchronously in advanced browsers.

Of course, there will be times when we need to execute arbitrary JavaScript on Source pages. And that’s a good thing! But if it loads code in a blocking manner, it might cause the front-end to slow down.

**TLDR:** If you can load non-critical code in a deferred, asynchronous manner, that will keep Source running as fast as possible. 🙌
