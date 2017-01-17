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

    // Animation support? (Specifically, looking for )
    var animation = false,
        elm = document.createElement('div');

        if ( elm.style.animationName !== undefined ) {
            animation = true;
        }

        if( animation === false ) {
            for( var i = 0; i < domPrefixes.length; i++ ) {
                if( elm.style[ domPrefixes[i] + 'AnimationName' ] !== undefined ) {
                    var pfx = domPrefixes[ i ];
                    var animationstring = pfx + 'Animation';
                    var keyframeprefix = '-' + pfx.toLowerCase() + '-';
                    animation = true;
                    break;
                }
            }
        }

        if ( animation == true ) {
            docClasses.push( animationClasses );
        }

    // Get scripts to load, if defined
    var fullJS = utils.getMeta( fullJSKey );

    if ( fullJS ) {
        utils.loadJS( fullJS.content );
    }

    // Add scoping classes to HTML element
    win.document.documentElement.className += " " + docClasses.join(" ");

}( this ));