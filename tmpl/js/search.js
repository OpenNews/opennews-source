/*
Component: Search toggle

// TODO: replace with collapsible?
*/
(function( $ ) {

    "use strict";

    var componentName = "search-toggle",
        closeSelectors = "." + componentName + " .icon-close",
        pageClass = "page",
        panelClass = "site-search",
        openClass = panelClass + "-open",
        transitioningClass = panelClass + "-transitioning",
        enhancedAttr = "data-enhanced-" + componentName,
        initSelector = "." + componentName + ":not([" + enhancedAttr + "])";

    $.fn[ componentName ] = function() {

        return this.each( function() {

            var $searchToggle = $( this ),
                sHref = $searchToggle.attr( "href" ),
                $searchPanel = $( sHref ),
                $body = $( "body" ),
                screenBlock = '<span class="icon icon-close" href="#">Close</span>';

            if ( $searchPanel ) {

                $searchPanel.attr( "data-enhanced-site-search", true );

                // close method
                var close = function() {
                    $searchPanel
                        .transEnd( function() {
                            $body.removeClass( transitioningClass );
                            // send focus to the menu button
                            $searchToggle[ 0 ].focus();
                        } );

                    $body
                        .removeClass( openClass )
                        .addClass( transitioningClass );
                }

                //open method
                var open = function() {
                    $searchPanel
                        .transEnd( function() {
                            $body.removeClass( transitioningClass )
                        });

                    $searchPanel.find( "input[type=search]" )[ 0 ].focus();

                    $body.addClass( transitioningClass + " " + openClass );
                }

                // toggle method
                var toggle = function( event ) {
                    if ( $body.is( "." + openClass ) ) {
                        close();
                    } else {
                        open();
                    }

                    event.preventDefault();
                }

                // Insert the “close” link
                $searchToggle.append( screenBlock );

                // Bind close, open, and toggle events to the panel
                $searchPanel.on( "close", close );
                $searchPanel.on( "open", open );
                $searchPanel.on( "toggle", toggle );

                // Bind toggle event to, well, the toggle link
                $searchToggle.on( "click", toggle );

                // When focusing on an element, close the panel if it’s open (and if the element is outside of the panel)
                $( document ).on( "focusin", function( event ) {
                    if ( $body.is( "." + openClass ) ) {
                        if ( !$( event.target ).parents( '.' + panelClass ).length ) {
                            $searchPanel.trigger( "close" );
                        }
                    }
                } );

                // Close the panel on (throttled) resize
                $( window ).on( "resize", SRC.utils.debounce( function() {
                    if ( $body.is( "." + openClass ) ) {
                        $searchPanel.trigger( "close" );
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
