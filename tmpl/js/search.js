/*
Component: Navigation toggle
*/
(function( $ ) {

    "use strict";

    $( function() {
        $( ".search-trigger" ).bind( "click", function( e ) {
            var $trigger = $( this ),
                slug = "#" + $trigger.attr( "href" ).split( "#" )[ 1 ],
                $target = $( slug ),
                $body = $( "body" ),
                openClass = "search-expanded";

            if ( $target ) {
                if ( $target.is( ".collapsible-expanded" ) ) {
                    $body.removeClass( openClass );
                } else {
                    $body.addClass( openClass );
                }
            }

            e.preventDefault();
        } );
    } );


}( shoestring ));
