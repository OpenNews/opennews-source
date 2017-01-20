/*
 * css transition support, prefix, and jQuery .transEnd() callback
 *
 * Copyright (c) 2013 Filament Group, Inc.
 * Licensed under MIT
 */
 (function( w, $ ){
  w.transitionSupport = {
    prefix: (function(){
      var pres = [ "webkit", "Moz", "ms", "O", "" ],
        pre;
      for( var i = 0; i < pres.length; i++ ){
        var eName = pres[ i ] + "Transition";
        if( i === pres.length - 1 ){
          eName = eName.toLowerCase();
        }
        if( eName in w.document.documentElement.style ){
          pre = pres[ i ];
        }
      }
      return pre;
    }())
  };
  w.transitionSupport.supported = !!w.hasAnimation && typeof( w.transitionSupport.prefix ) === "string";

  // simple css transition complete callback
  $.fn.transEnd = function( callback, keyframes ){
    var applyTransition = transitionSupport.supported,
      prop = keyframes ? "animation" : "transition",
      capitalProp = prop.substr( 0, 1 ).toUpperCase() + prop.substr( 1 ),
      durationProp = transitionSupport.prefix + ( transitionSupport.prefix && transitionSupport.prefix.length ? "-" + prop + "-duration" : prop + "-duration" ),
      propEvent = transitionSupport.prefix + ( transitionSupport.prefix && transitionSupport.prefix.length ? capitalProp + "End" : prop + "end" );

    function getDuration( $elem ){
      var durationText = $elem.css( durationProp ),
        durationMS = 0;

      if( durationText ){
        //remove units and convert to MS if specified in "s"
        durationMS = durationText.match( /([\.\d]+)(m?)/i ) && RegExp.$2 ? parseFloat( RegExp.$1 ) : parseFloat( RegExp.$1 ) * 1000;
      }

      return durationMS;
    }

    return this.each(function(){

      var that = this;

      function callit(){
        callit = function(){};
        callback.call( that );
      }

      var durationMS = getDuration( $( that ) ),
        timeout;

      if( callback ){
        timeout = setTimeout( callit, durationMS );
        $( that ).one( propEvent, function(e){
          if( $( e.target ).is( that ) ){
            if( timeout ){
              clearTimeout(timeout);
            }
            callit();
          }
        });
      }
    });
  };

  // animationEnd uses transEnd's internals
  $.fn.animationEnd = function( callback ){
    return this.transEnd( callback, true );
  };

}( this, jQuery ));