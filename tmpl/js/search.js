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
                openClass = "is-expanded";

            if ( $target ) {
                if ( $target.is( ".collapsible-expanded" ) ) {
                    $trigger.removeClass( openClass );
                } else {
                    $trigger.addClass( openClass );
                }
            }

            e.preventDefault();
        } );
    } );


}( shoestring ));
