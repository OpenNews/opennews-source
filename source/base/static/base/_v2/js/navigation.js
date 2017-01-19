/*
Component: Navigation toggle

// TODO: replace with collapsible?
*/
(function( $ ) {

    "use strict";

    var componentName = "nav-toggle",
        closeSelectors = "." + componentName + " .icon-close",
        pageClass = "page",
        panelClass = "site-nav-links",
        openClass = panelClass + "-open",
        transitioningClass = panelClass + "-transitioning",
        enhancedAttr = "data-enhanced-" + componentName,
        initSelector = "." + componentName + ":not([" + enhancedAttr + "])";

    $.fn[ componentName ] = function() {

        return this.each( function() {

            var $navToggle = $( this ),
                sHref = $navToggle.attr( "href" ),
                $navPanel = $( sHref ),
                $body = $( "body" ),
                screenBlock = '<span class="icon icon-close" href="#">Close</span>';

            if ( $navPanel ) {

                $navPanel.attr( "data-enhanced-site-nav", true );

                // close method
                var close = function( e ) {
                    $navPanel
                        .transEnd( function() {
                            $body.removeClass( transitioningClass );
                        } );

                    $body
                        .removeClass( openClass )
                        .addClass( transitioningClass );
                }

                //open method
                var open = function() {
                    $navPanel
                        .transEnd( function() {
                            $body.removeClass( transitioningClass )
                        });

                    $body.addClass( transitioningClass + " " + openClass );
                }

                // toggle method
                var toggle = function( e ) {
                    if ( $body.is( "." + openClass ) ) {
                        close();
                    } else {
                        open();
                    }

                    e.preventDefault();
                }

                // Insert the “close” link
                $navToggle.append( screenBlock );

                // Bind close, open, and toggle events to the panel
                $navPanel.bind( "close", close );
                $navPanel.bind( "open", open );
                $navPanel.bind( "toggle", toggle );

                // Bind toggle event to, well, the toggle link
                $navToggle.bind( "click", toggle );

                // When focusing on an element, close the panel if it’s open (and if the element is outside of the panel)
                $( document ).bind( "focusin", function( e ) {
                    if ( $body.is( "." + openClass ) ) {
                        if ( !$( e.target ).parents( '.' + panelClass ).length ) {
                            $navPanel.trigger( "close" );
                        }
                    }
                } );

                // Close the panel on (throttled) resize
                $( window ).bind( "resize", SRC.utils.debounce( function() {
                    if ( $body.is( "." + openClass ) ) {
                        $navPanel.trigger( "close" );
                    }
                }, 250 ) );
            }

        });

    };

    // auto-init on enhance (which is called on domready)
    $( document ).bind( "enhance", function( e ){
        var $sel = $( e.target ).is( initSelector ) ? $( e.target ) : $( initSelector, e.target );
        $sel[ componentName ]().attr( enhancedAttr, "true" );
    });

}( shoestring ));
