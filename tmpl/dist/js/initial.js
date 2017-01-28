/*! grunt-grunticon Stylesheet Loader - v2.1.6 | https://github.com/filamentgroup/grunticon | (c) 2015 Scott Jehl, Filament Group, Inc. | MIT license. */

!function(){function e(e,n,t){"use strict";var o=window.document.createElement("link"),r=n||window.document.getElementsByTagName("script")[0],a=window.document.styleSheets;return o.rel="stylesheet",o.href=e,o.media="only x",r.parentNode.insertBefore(o,r),o.onloadcssdefined=function(e){for(var n,t=0;t<a.length;t++)a[t].href&&a[t].href===o.href&&(n=!0);n?e():setTimeout(function(){o.onloadcssdefined(e)})},o.onloadcssdefined(function(){o.media=t||"all"}),o}function n(e,n){e.onload=function(){e.onload=null,n&&n.call(e)},"isApplicationInstalled"in navigator&&"onloadcssdefined"in e&&e.onloadcssdefined(n)}!function(t){var o=function(r,a){"use strict";if(r&&3===r.length){var i=t.navigator,c=t.document,s=t.Image,d=!(!c.createElementNS||!c.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect||!c.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1")||t.opera&&i.userAgent.indexOf("Chrome")===-1||i.userAgent.indexOf("Series40")!==-1),l=new s;l.onerror=function(){o.method="png",o.href=r[2],e(r[2])},l.onload=function(){var t=1===l.width&&1===l.height,i=r[t&&d?0:t?1:2];t&&d?o.method="svg":t?o.method="datapng":o.method="png",o.href=i,n(e(i),a)},l.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==",c.documentElement.className+=" grunticon"}};o.loadCSS=e,o.onloadCSS=n,t.grunticon=o}(this),function(e,n){"use strict";var t,o=n.document,r="grunticon:",a=function(e){if(o.attachEvent?"complete"===o.readyState:"loading"!==o.readyState)e();else{var n=!1;o.addEventListener("readystatechange",function(){n||(n=!0,e())},!1)}},i=function(e){return n.document.querySelector('link[href$="'+e+'"]')},c=function(e,n){if(t&&!n)return t;t={};var o,a,i,c,s,d;if(o=e.sheet,!o)return t;a=o.cssRules?o.cssRules:o.rules;for(var l=0;l<a.length;l++)i=a[l].cssText,c=r+a[l].selectorText,s=i.split(");")[0].match(/US\-ASCII\,([^"']+)/),s&&s[1]&&(d=decodeURIComponent(s[1]),t[c]=d);return t},s=function(e,n){var t,a,i,c,s;n?t=e:(n=e,t=o),c="data-grunticon-embed";for(var d in n){s=d.slice(r.length);try{a=t.querySelectorAll(s)}catch(e){continue}i=[];for(var l=0;l<a.length;l++)null!==a[l].getAttribute(c)&&i.push(a[l]);if(i.length)for(l=0;l<i.length;l++)i[l].innerHTML=n[d],i[l].style.backgroundImage="none",i[l].removeAttribute(c)}return i},d=function(n,t){"svg"===e.method&&a(function(){var o=c(i(e.href));"function"==typeof t?(s(n,o),t()):s(o),"function"==typeof n&&n()})};e.embedIcons=s,e.getCSS=i,e.getIcons=c,e.ready=a,e.svgLoadedCallback=d,e.embedSVG=d}(grunticon,this)}();
// Do not edit.
window.SRC = {};
window.SRC.utils = {};
window.SRC.config = {};



/*

Edit below.

*/
SRC.config.typekit = "jyd1gcb";
SRC.config.disqus_id = "source-opennews";

var disqus_shortname = SRC.config.disqus_id;
(function( win, undefined ){

    var SRC = win.SRC,
        utils = SRC.utils;

    // loadJS: load a JS file asynchronously. Included from https://github.com/filamentgroup/loadJS/
    function loadJS( src, cb ){
        "use strict";
        var ref = window.document.getElementsByTagName( "script" )[ 0 ];
        var script = window.document.createElement( "script" );
        script.src = src;
        script.async = true;
        ref.parentNode.insertBefore( script, ref );
        if (cb && typeof( cb ) === "function") {
            script.onload = cb;
        }
        return script;
    }

    utils.loadJS = loadJS;

    /*! loadCSS: load a CSS file asynchronously. [c]2016 @scottjehl, Filament Group, Inc. Licensed MIT */
    (function(w){
        "use strict";
        /* exported loadCSS */
        var loadCSS = function( href, before, media ){
            // Arguments explained:
            // `href` [REQUIRED] is the URL for your CSS file.
            // `before` [OPTIONAL] is the element the script should use as a reference for injecting our stylesheet <link> before
                // By default, loadCSS attempts to inject the link after the last stylesheet or script in the DOM. However, you might desire a more specific location in your document.
            // `media` [OPTIONAL] is the media type or query of the stylesheet. By default it will be 'all'
            var doc = w.document;
            var ss = doc.createElement( "link" );
            var ref;
            if( before ){
                ref = before;
            }
            else {
                var refs = ( doc.body || doc.getElementsByTagName( "head" )[ 0 ] ).childNodes;
                ref = refs[ refs.length - 1];
            }

            var sheets = doc.styleSheets;
            ss.rel = "stylesheet";
            ss.href = href;
            // temporarily set media to something inapplicable to ensure it'll fetch without blocking render
            ss.media = "only x";

            // wait until body is defined before injecting link. This ensures a non-blocking load in IE11.
            function ready( cb ){
                if( doc.body ){
                    return cb();
                }
                setTimeout(function(){
                    ready( cb );
                });
            }
            // Inject link
                // Note: the ternary preserves the existing behavior of "before" argument, but we could choose to change the argument to "after" in a later release and standardize on ref.nextSibling for all refs
                // Note: `insertBefore` is used instead of `appendChild`, for safety re: http://www.paulirish.com/2011/surefire-dom-element-insertion/
            ready( function(){
                ref.parentNode.insertBefore( ss, ( before ? ref : ref.nextSibling ) );
            });
            // A method (exposed on return object for external use) that mimics onload by polling document.styleSheets until it includes the new sheet.
            var onloadcssdefined = function( cb ){
                var resolvedHref = ss.href;
                var i = sheets.length;
                while( i-- ){
                    if( sheets[ i ].href === resolvedHref ){
                        return cb();
                    }
                }
                setTimeout(function() {
                    onloadcssdefined( cb );
                });
            };

            function loadCB(){
                if( ss.addEventListener ){
                    ss.removeEventListener( "load", loadCB );
                }
                ss.media = media || "all";
            }

            // once loaded, set link's media back to `all` so that the stylesheet applies once it loads
            if( ss.addEventListener ){
                ss.addEventListener( "load", loadCB);
            }
            ss.onloadcssdefined = onloadcssdefined;
            onloadcssdefined( loadCB );
            return ss;
        };
        // commonjs
        if( typeof exports !== "undefined" ){
            exports.loadCSS = loadCSS;
        }
        else {
            w.loadCSS = loadCSS;
        }
    }( typeof global !== "undefined" ? global : this ));

    utils.loadCSS = loadCSS;

    // getMeta function: get a meta tag by name
    // NOTE: meta tag must be in the HTML source before this script is included in order to guarantee it'll be found
    function getMeta( metaname ){
        var metas = window.document.getElementsByTagName( "meta" );
        var meta;
        for( var i = 0; i < metas.length; i ++ ){
            if( metas[ i ].name && metas[ i ].name === metaname ){
                meta = metas[ i ];
                break;
            }
        }
        return meta;
    }

    utils.getMeta = getMeta;

    // cookie function from https://github.com/filamentgroup/cookie/
    function cookie( name, value, days ){
        // if value is undefined, get the cookie value
        if( value === undefined ){
            var cookiestring = "; " + window.document.cookie;
            var cookies = cookiestring.split( "; " + name + "=" );
            if ( cookies.length === 2 ){
                return cookies.pop().split( ";" ).shift();
            }
            return null;
        } else {
            var expires;
            // if value is a false boolean, we'll treat that as a delete
            if( value === false ){
                days = -1;
            }
            if ( days ) {
                var date = new Date();
                date.setTime( date.getTime() + ( days * 24 * 60 * 60 * 1000 ) );
                expires = "; expires="+date.toGMTString();
            }
            else {
                expires = "";
            }
            window.document.cookie = name + "=" + value + expires + "; path=/";
        }
    }

    utils.cookie = cookie;

    // Simple debounce (via http://davidwalsh.name/javascript-debounce-function)
    var debounce = function( func, wait, immediate ) {
        var timeout;
        return function() {
            var context = this,
                args = arguments;

            var later = function() {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };

            var callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);

            if ( callNow ) func.apply(context, args);
        };
    };

    utils.debounce = debounce;

}( this ));

(function(d) {
var config = {
  kitId: SRC.config.typekit,
  scriptTimeout: 3000,
  async: true
},
h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
})(document);

(function( win, undefined ){

    // Enable JS strict mode
    "use strict";

    // Variables! The best.
    var SRC = win.SRC,
        utils = SRC.utils,
        // Classes for various feature tests
        docClasses = [ "enhanced" ],
        animationClasses = [ "has-animation" ],
        // Grunticon config
        grunticonPath = utils.getMeta( "grunticon" ),
        iconsDataSVG = "icons.data.svg.css",
        iconsDataPNG = "icons.data.png.css",
        iconsPNG = "icons.fallback.css",
        // Meta keywords (used for loadCSS and loadJS)
        fullCSSKey = "fullCSS",
        fullJSKey = "fullJS";

    SRC.is_enhanced = false;

/*
Enhancements for all browsers, qualified or not
*/

    // Load full CSS
    var fullCSS = utils.getMeta( fullCSSKey );
    if( fullCSS && !utils.cookie( fullCSSKey ) ){
        utils.loadCSS( fullCSS.content );
        // set cookie to the build number, to mark this file fetched
        utils.cookie( fullCSSKey, "loaded", 7 );
    }

    // Grunticon
    if ( grunticon && grunticonPath && grunticonPath.content ) {
        var path = grunticonPath.content;

        grunticon( [ path + iconsDataSVG, path + iconsDataPNG, path + iconsPNG ], function() {
            grunticon.svgLoadedCallback();
        } );

        if ( grunticon.method ) {
            window.document.documentElement.className += " grunticon-" + grunticon.method;
        }
    }

/*
Mustard cuttin'.
*/
    if ( !( "querySelector" in document
        && "addEventListener" in window
        && "sessionStorage" in window
    ) ) {
        return;
    }

/*
Enhancements for QUALIFIED browsers. (Yay! We passed!)
*/

    // Set an enhancement flag.
    SRC.is_enhanced = true;

    // Flexbox support? (Specifically, looking for `flex-wrap`.)
    var s = document.body || document.documentElement,
      s = s.style;
    if ( s.webkitFlexWrap == '' || s.msFlexWrap == '' || s.flexWrap == '' ) {
        docClasses.push( "supports-flex" );
    }

    // Get scripts to load, if defined
    var fullJS = utils.getMeta( fullJSKey );

    if ( fullJS ) {
        utils.loadJS( fullJS.content );
    }

    // Add scoping classes to HTML element
    win.document.documentElement.className += " " + docClasses.join(" ");

}( this ));