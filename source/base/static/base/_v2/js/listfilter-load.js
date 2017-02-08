// Load listfilter.js on pages that need it
(function( $ ) {
    "use strict";

    var $filterFormInput = $( "input#filter" ),
        $listContainer = $( "#filter-list" ),
        $filterItemClass = $( ".filter-item" );

    // If a page sets `filterFormInput`, `listContainer`, and `filterItemClass`, load listfilter
    if ( $filterFormInput.length && $listContainer.length && $filterItemClass.length ) {
        SRC.utils.loadJS( "/static/base/_v2/js/listfilter.js", function() {
            // after loading, create a filtering instance on the page
            var filter = ListFilter({
                filterFormInput: "input#filter",
                listContainer: "#filter-list",
                filterItemClass: ".filter-item"
            });        
        } );
    }

}( jQuery ) );