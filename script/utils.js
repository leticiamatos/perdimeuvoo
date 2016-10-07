jQuery.noConflict();

jQuery(function($) {
    

	// Fancybox Galery modal
	// $(".fancybox").fancybox({
	// 	openEffect  : 'none',
	// 	closeEffect	: 'none'
	// });

	// Form slide
	$('.form_slide_wpr').bxSlider({
		infiniteLoop: false,
		mode: 'vertical',
		pager: true,
		speed: 1000,
		easing: 'cubic-bezier(0.175, 0.885, 0.32, 1.275)'
	});	

	// Select Menu
	$( ".selected-ui" ).selectmenu();

	// Toggle class Highlight post home
	$('.login_btn').click(function(){
		$('header .block_cntt').toggleClass('active');
	})

})

// Responsive debugger script
jQuery(document).ready(function ($) {
	var MEASUREMENTS_ID = 'measurements'; // abstracted-out for convenience in renaming
	$("body").append('<div id="'+MEASUREMENTS_ID+'"></div>');
	$("#"+MEASUREMENTS_ID).css({
	    'position': 'fixed',
	    'bottom': '0',
	    'right': '0',
	    'background-color': 'black',
	    'color': 'white',
	    'padding': '5px',
	    'font-size': '10px',
	    'opacity': '0.4',
	    'font-family': 'Arial, Sans',
	    'z-index': '100'
	});
	getDimensions = function(){
	    return $(window).width() + ' (' + $(document).width() + ') x ' + $(window).height() + ' (' + $(document).height() + ')';
	}
	getOrientation = function(){
		if ($(window).width() >= $(window).height()){
			return 'horizontal';
		}else{
			return 'vertical';
		}
	}
	setOrientation = function(){
	    if (getOrientation() == 'vertical' && !$('body').hasClass('vertical')){
	    	$('body').addClass('vertical');
	    } else if (getOrientation() == 'horizontal' && $('body').hasClass('vertical')){
	    	$('body').removeClass('vertical');
	    }
	}
	setOrientation();
 });
