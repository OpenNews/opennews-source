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
                $( ".header-main .nav-toggle" ).append( closeStr );

                $( ".site-nav" ).on( "expand", function() {
                    $body.addClass( openClass );

                    if ( $( ".site-search" ).is( ".collapsible-expanded" ) ) {
                        $( ".site-search .collapsible-header" ).trigger( "click" );
                    }
                } );

                $( ".site-nav" ).on( "collapse", function() {
                    $body.removeClass( openClass );
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
