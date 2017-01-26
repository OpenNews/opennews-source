/*
Component: Inline phrase forms
---
Inside each .form-phrase block, we’ve got stuff that looks like this:

    <span class="cue squelch" role="presentation">“I’m submitting</span>
    <p>
        <label for="repo-name">Name of your app/tool:</label>
        <input type="text" value="" id="repo-name" />
    </p>
    <span class="cue squelch" role="presentation">, which is a</span>

This script will

1. Show the text of each`span` to sighted users, 
2. Accessibly hide the `label` from view, and
3. Use the text inside each `label` as the `placeholder` for its corresponding `input[type=text]`.
*/
(function( $ ) {

    "use strict";

    var componentName = "form-phrase",
        hideClass = "squelch",
        a11yClass = "a11y",
        enhancedAttr = "data-enhanced-" + componentName,
        initSelector = "." + componentName + ":not([" + enhancedAttr + "])";

    $.fn[ componentName ] = function() {

        // Let’s find each .form-phrase block on the page
        return this.each( function() {

            // Look for all `label`s and `.squelch` elements inside this `.form-phrase` block
            var $phrase = $( this ),
                $labels = $( "label", $phrase ),
                $spans = $( ".squelch", $phrase );

            // Process our `label`s
            if ( $labels.length ) {
                $labels.each( function() {
                    // Grab the text inside the label, and find the `input` associated with it (by using the `for="[id]"` attribute)
                    var $label = $( this ),
                        labelText = $label.text(),
                        $target = $( "#" + $label.attr( "for" ) );

                    // If the last character in `labelText` is a `:`, clip it off
                    // NOTE: if other characters need to be trimmed from the end, this could be expanded
                    if ( labelText.slice( -1 ) === ":" ) {
                        labelText = labelText.substring( 0, labelText.length - 1 );
                    }

                    if ( $target.length ) {
                        // Assign `labelText` to the target input as its placeholder, and set its `size` to the length of the placeholder (to minimize clipping)
                        $target
                            .attr( "placeholder", labelText )
                            .attr( "size", labelText.length );

                        // Accessibly “hide” the label
                        $label.addClass( a11yClass );
                    }
                } )
            }

            // Process our `span`s
            if ( $spans.length ) {
                $spans.each( function() {
                    // Remove `.squelch` from the `span` to make it visible
                    $( this ).removeClass( hideClass );
                } );
            }
        });

    };

    // auto-init on enhance (which is called on domready)
    $( document ).on( "enhance", function( e ){
        var $sel = $( e.target ).is( initSelector ) ? $( e.target ) : $( initSelector, e.target );
        $sel[ componentName ]().attr( enhancedAttr, "true" );
    });

}( jQuery ));
