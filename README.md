### opennews-source

An updated version of the CMS behind OpenNews' Source website.

#### Icons

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