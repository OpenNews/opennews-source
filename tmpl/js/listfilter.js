(function( $ ) {
    "use strict";

    function ListFilter(options) {
        var filter = filter || {};

        filter.init = function(options) {
            // required args
            filter.filterFormInput = options.filterFormInput;
            filter.listContainer = options.listContainer;
            filter.filterItemClass = options.filterItemClass;
        
            // build the filter
            filter.filteredList = $(filter.listContainer);
            filter.addMatcher();
        
            // store some stable values
            filter.filteredListDefaultDisplay = filter.filteredList.css('display');
            filter.filterItemClassDefaultDisplay = filter.filteredList.find(filter.filterItemClass).css('display')            
        }

        filter.addMatcher = function() {
            // after each keystroke in filterForm input, do a case-insensitive
            // search against all filterItemClass elements inside listContainer
            $(filter.filterFormInput).change(function() {
                filter.filterValue = $(this).val();

                if (!!filter.filterValue) {
                    filter.match();
                } else {
                    filter.showAllItems();
                }
    
                filter.checkNoResults();

                return false;
            }).keyup(function() {
                $(this).change();
            });
        }

        filter.match = function() {
            // hide the list container to avoid potential repaints
            filter.filteredList.css('display','none');

            // perform the matching
            filter.hideUnmatchedItems();
            filter.showMatchedItems();

            // show the list container again
            filter.filteredList.css('display',filter.filteredListDefaultDisplay);
        }

        filter.hideUnmatchedItems = function() {
            // hide items that don't have matching text
            filter.filteredList.find(filter.filterItemClass+':not(:icontains(' + filter.filterValue + '))').css('display','none');
        }

        filter.showMatchedItems = function() {
            // show items that contain matching text
            filter.filteredList.find(filter.filterItemClass+':icontains(' + filter.filterValue + ')').css('display','list-item');
        }

        filter.showAllItems = function () {
            // nothing in filter form, so make sure everything is visible
            filter.filteredList.find(filter.filterItemClass).css('display',filter.filterItemClassDefaultDisplay);
        }

        filter.checkNoResults = function() {
            // show 'no results' message if we've removed all the items
            $('#filter-no-results').remove();
            if ($(filter.filterItemClass+':visible').length == 0) {
                filter.filteredList.append('<p id="filter-no-results">No matching results found.</p>');
            }
        }

        // ready, set, go
        filter.init(options);
        return filter;
    }

    // custom jQuery filter selector `icontains` for text matching
    // http://answers.oreilly.com/topic/1055-creating-a-custom-filter-selector-with-jquery/
    $.expr[':'].icontains = function(element, index, match) {
        return (element.textContent || element.innerText || "").toUpperCase().indexOf(match[3].toUpperCase()) >= 0;
    };


    if ( (typeof filterFormInput !== 'undefined') && (typeof listContainer !== 'undefined') && (typeof filterItemClass !== 'undefined') ) {
        var filter = ListFilter({
            filterFormInput: filterFormInput,
            listContainer: listContainer,
            filterItemClass: filterItemClass
        });        
    }
}( jQuery ) );