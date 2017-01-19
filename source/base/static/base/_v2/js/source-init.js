// Init components/plugins on DOMready
(function( $ ){
  $( function(){

    $( document ).trigger( "enhance" );

    $( "[data-set] > *" ).appendAround();

  });
}( shoestring ));