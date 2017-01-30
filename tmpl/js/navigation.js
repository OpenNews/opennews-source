/*
Component: Navigation toggle
*/
(function( $ ) {

    "use strict";

    var componentName = "nav-toggle",
        closeSelectors = "." + componentName + " .icon-close",
        pageClass = "page",
        panelClass = "site-nav",
        openClass = "is-" + panelClass + "-open",
        transitioningClass = "is-transitioning",
        enhancedAttr = "data-enhanced-" + componentName,
        initSelector = "." + componentName + ":not([" + enhancedAttr + "])";

    $.fn[ componentName ] = function() {

        return this.each( function() {

            var $navToggle = $( this ),
                sHref = $navToggle.attr( "href" ),
                $navPanel = $( sHref ),
                $body = $( "body" ),
                closeStr = '<span class="icon icon-close" href="#">Close</span>';

            if ( $navPanel ) {
                // Insert the close icon
                $( ".header-main .nav-toggle" ).append( closeStr );

                // When the panel is closed, remove the “is-open” class from the body element.
                $( "." + panelClass ).on( "collapse", function() {
                    $body.removeClass( openClass );
                } );

                // When the panel is opened, add the “is-open” class to the body element.
                $( "." + panelClass ).on( "expand", function() {
                    $body.addClass( openClass );

                    // If search is open, close it.
                    if ( $( ".site-search" ).is( ".collapsible-expanded" ) ) {
                        $( ".site-search .collapsible-header" ).trigger( "click" );
                    }
                } );

                // Close the panel on (throttled) resize
                $( window ).on( "resize", SRC.utils.debounce( function() {
                    if ( $( "." + panelClass ).is( ".collapsible-expanded" ) ) {
                        $( "." + panelClass + " .collapsible-header" ).trigger( "click" );
                    }
                }, 250 ) );
            }

        });

    };

    // auto-init on enhance (which is called on domready)
    $( document ).on( "enhance", function( e ){
        var $sel = $( e.target ).is( initSelector ) ? $( e.target ) : $( initSelector, e.target );
        $sel[ componentName ]().attr( enhancedAttr, "true" );
    });

}( jQuery ));
