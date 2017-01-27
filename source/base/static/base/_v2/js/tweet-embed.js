// Load Disqus comments on article pages
(function( $ ) {
    "use strict";

    // If we’re on an article page, a `#disqus_thread` element should be present. If so, load Disqus.
    var $tweets = $( "blockquote.twitter-tweet" );

    if ( $tweets.length ) {
        SRC.utils.loadJS( "//platform.twitter.com/widgets.js" );
    }

}( jQuery ) );