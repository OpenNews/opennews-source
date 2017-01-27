// Load Disqus comments on article pages
(function( $ ) {
    "use strict";

    // If we’re on an article page, a `#disqus_thread` element should be present. If so, load Disqus.
    var $comments = $( "#disqus_thread" ),
        hed_markup = '<h2 class="hed-label">{title}</h2>';

    if ( $comments.length ) {
        SRC.utils.loadJS( "//" + SRC.config.disqus_id + ".disqus.com/embed.js", function() {
            // If Disqus successfully loads, prepend a headline (e.g., `<h2>Comments</h2>`) to its container.
            var title = $comments.parent().attr( "data-title" );
            $comments.prepend( hed_markup.split( '{title}' ).join( title ) );
        } );
    }

}( jQuery ) );