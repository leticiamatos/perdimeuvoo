jQuery.noConflict();

jQuery(function($) {

	// Adding class to body 
	mainClass = $('main').attr('class');
	bodyClass = mainClass.slice(5);
	$('body').addClass(bodyClass);
	// console.log(mainClass);


	// Fancybox Galery modal
	// $(".fancybox").fancybox({
	// 	openEffect  : 'none',
	// 	closeEffect	: 'none'
	// });

	// Form slide
	form_slider = $('.form_slide_wpr').bxSlider({
		infiniteLoop: false,
		mode: 'vertical',
		pager: true,
		speed: 1000,
		easing: 'cubic-bezier(0.175, 0.885, 0.32, 1.275)'
	});	

	// Select Menu
	$( ".selected-ui" ).selectmenu();

	// Login box
	$('.login_btn').click(function(){
		$('header .block_cntt').toggleClass('active');
		// $("input#login").focus();
	});
	
	// -BRS- Utilizar a função validateForm para validação do formulário da ocorrencia. 
	// Form Validation for slide
	function validateForm(slideOrder){

		pagerElem = '.bx-pager-item:nth-child('+ slideOrder + ') a';
		slideMsgElem_ok = 'form .form_slide:nth-child('+ slideOrder + ') .msg.success';
		slideMsgElem_error = 'form .form_slide:nth-child('+ slideOrder + ') .msg.error';

		// -BRS- Para campos ok: muda a classe da paginação (bolinha) e passa para o próximo passo
		// if validation OK
		$(pagerElem).addClass('ok'); // adds ok class to current bullet pager
		//$(slideMsgElem_ok).addClass('active'); // Shows sucess msg
    	form_slider.goToNextSlide(); // Goes to next slide

		// -BRS- Para campos com erro: muda a classe da paginação (bolinha) e mostra mensagem de erro
		// if validation NOT ok
		$(pagerElem).addClass('error'); // adds error class to curent bullet pager
		$(slideMsgElem_error).addClass('active'); // Shows erro msg
	}

	
	//pre-validating form
	if($('main.page_home').length ){
		// $('body').addClass('home');

	}else if($('main.page_form').length ){
		// $('body').addClass('form');
		
		// Keys to next and previous slide
		$('.page_form form input').each(function() {
			$(this).keypress(function(e) {
				currentSlide = form_slider.getCurrentSlide() + 1;

				slideorder = $(this).closest('.form_slide').attr('data-slideorder');

				// enter
				if(e.which == 13) {
					validateForm(currentSlide);
				
				// Pg Down and Tab
				}else if(e.keyCode == 34 || e.keyCode == 9) {
					validateForm(currentSlide);
				
				// Pg Up
    			} else if(e.keyCode == 33){
		        	form_slider.goToPrevSlide();
    			}
			});
		});

		$('.bx-next').click( function(e){
			e.preventDefault();
			/* Act on the event */
			validateForm();
		});
	}

	// UI Accordion
	$('.accordion_cntt').accordion({
		collapsible : true,
		heightStyle : 'content'

	});
})

// Responsive debugger script
jQuery(document).ready(function ($) {
	// input focus
	if($("input#nome").length){
		$("input#nome").focus();
	}else{
	}

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
