/*
Component: Inline phrase forms

In which this:

```[label1]: [input1] <span class="squelch">is a</span> [label2]: [input2]```

gets turned (accessibly) into this:

```[input1 placeholder="label1"] <span>is a</span> [input2 placeholder="label2"]```
*/
(function( $ ) {

    "use strict";

    var componentName = "form-phrase",
        hideClass = "squelch",
        a11yClass = "a11y",
        enhancedAttr = "data-enhanced-" + componentName,
        initSelector = "." + componentName + ":not([" + enhancedAttr + "])";

    $.fn[ componentName ] = function() {

        return this.each( function() {

            var $phrase = $( this ),
                $labels = $( "label", $phrase ),
                $spans = $( ".squelch", $phrase );

            if ( $labels.length ) {
                $labels.each( function() {
                    var $label = $( this ),
                        placeholder = $label.text(),
                        $target = $( "#" + $label.attr( "for" ) );

                    if ( placeholder.slice( -1 ) === ":" ) {
                        placeholder = placeholder.substring( 0, placeholder.length - 1 );
                    }

                    if ( $target.length ) {
                        $target
                            .attr( "placeholder", placeholder )
                            .attr( "size", placeholder.length );
                        $label.addClass( a11yClass );
                    }
                } )
            }
            if ( $spans.length ) {
                $spans.each( function() {
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
