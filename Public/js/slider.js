(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	var carousel = function() {
		$('.home-slider').owlCarousel({
	    loop:true,
	    autoplay: false,
	    margin:0,
	    animateOut: 'fadeOut',
	    animateIn: 'fadeIn',
		smartSpeed:450,
	    nav:true,
	    dots: false,
	    autoplayHoverPause: false,
	    items: 1,
	    navText : ["<span class='icon ion-md-arrow-round-back'></span>","<span class='icon ion-md-arrow-round-forward'></span>"],
	    responsive:{
	      0:{
	        items:1
	      },
	      600:{
	        items:1
	      },
	      1000:{
	        items:1
	      }
	    }
		});

	};
	carousel();

})(jQuery);