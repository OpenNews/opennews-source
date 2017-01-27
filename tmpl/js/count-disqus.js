// Load Disqus counts
(function( $ ) {
    "use strict";

    // Any links to #disqus_thread? If so, load count.js.
    var utils = SRC.utils,
        $commentlink = $( "a[href='#disqus_thread']" ),
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

        if ( typeof count === "number" && !isNaN( count ) ) {
            var prettyCount = prettifyNumber( count );

            $link.html( prettyCount );
            if ( $link.not( "." + commentsClass ) ) {
                $link.addClass( commentsClass )
            }
        }
    };

    SRC.utils.updateCount = updateCount;

    if ( $commentlink.length ) {
        // Load the count.js script
        SRC.utils.loadJS( countScript, function() {
            if ( DISQUSWIDGETS ) {
                DISQUSWIDGETS.getCount( {
                    reset: true
                } );

                // NOTE: There should be a less hacky way to time this, but Disqus’ events seem to be locked up pretty tight. So until a better way emerges, we’re using `.on( "load" )` to avoid any race conditions.
                $( window ).on( "load", function() {
                    updateCount( $commentlink );
                } );
            }
        } );
    }

}( jQuery ) );