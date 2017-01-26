// Load Disqus counts
(function( $ ) {
    "use strict";

    // Any links to #disqus_thread? If so, load count.js.
    var utils = SRC.utils,
        $commentlink = $( "a[href~='#disqus_thread']" ),
        countScript = "https://" + SRC.config.disqus_id + ".disqus.com/count.js",
        commentsClass = "comments-loaded";

    // Function to format numbers *nicely*
    // NOTE: This is fine here, but it might be a candidate to be moved to SRC.utils
    var prettifyNumber = function( number ) {
        var numberString,
            scale = "";

        if ( isNaN( number ) || !isFinite( number ) ) {
            numberString = "N/A";
        } else {
            var absoluteValue = Math.abs( number );

            if ( absoluteValue < 1000 ) {
                scale = "";
            } else if ( absoluteValue < 1000000 ) {
                scale = "K";
                absoluteValue = absoluteValue/1000;
            } else if ( absoluteValue < 1000000000 ) {
                scale = "M";
                absoluteValue = absoluteValue/1000000;
            } else if ( absoluteValue < 1000000000000 ) {
                scale = "B";
                absoluteValue = absoluteValue/1000000000;
            } else if ( absoluteValue < 1000000000000000 ) {
                scale = "T";
                absoluteValue = absoluteValue/1000000000000;
            }

            var maxDecimals = 0;
            if ( absoluteValue < 10 && scale != "" ) {
                maxDecimals = 1;
            }
            numberString = absoluteValue.toFixed( maxDecimals );
            numberString += scale
        }

        return numberString;
    };

    // Function to update our link text
    var updateCount = function( $link ) {
        var html = $link.html(),
            count = parseInt( html );

        if ( typeof count === "number" ) {
            var prettyCount = prettifyNumber( count );

            $link.html( prettyCount );
            if ( $link.not( "." + commentsClass ) ) {
                $link.addClass( commentsClass )
            }
        }
    };

    if ( $commentlink.length ) {
        // Load the count.js script
        SRC.utils.loadJS( countScript );

        $( document ).on( "comments-loaded", function( $link ) {
            // NOTE: There should be a less hacky way to time this, but Disqus’ events seem to be locked up pretty tight. So until then, we’re using `setTimeout` to avoid any race conditions.
            setTimeout( function() {
                updateCount( $link );
            }, 1000 );
        }( $commentlink ) );

        $( document ).on( "comments-new", function( $link ) {
            updateCount( $link );
        }( $commentlink ) );
    }

}( jQuery ) );