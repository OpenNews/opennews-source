// Load listfilter.js on pages that need it
(function( $ ) {
    "use strict";

    // If a page sets `filterFormInput`, `listContainer`, and `filterItemClass`, load listfilter
    if ( (typeof filterFormInput !== 'undefined') && (typeof listContainer !== 'undefined') && (typeof filterItemClass !== 'undefined') ) {
        SRC.utils.loadJS( "/static/base/_v2/js/listfilter.js", function() {
            // after loading, create a filtering instance on the page
            var filter = ListFilter({
                filterFormInput: filterFormInput,
                listContainer: listContainer,
                filterItemClass: filterItemClass
            });        
        } );
    }

}( jQuery ) );