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

    /*!
    loadCSS: load a CSS file asynchronously.
    [c]2016 @scottjehl, Filament Group, Inc.
    Licensed MIT
    */
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
