jQuery(function ($) {
    'use strict';

    // Menu Shrink JS
	$(window).on('scroll', function() {
		if ($(this).scrollTop() > 50) {
			$('.main-nav').addClass('menu-shrink');
		} else {
			$('.main-nav').removeClass('menu-shrink');
		}
    });	

    // Mean Menu JS
	jQuery('.mean-menu').meanmenu({
		meanScreenWidth: '991'
	});

	// Popup Youtube JS
	$('.popup-youtube').magnificPopup({
		disableOn: 320,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});

	// Odometer JS
	$('.odometer').appear(function(e) {
		var odo = $('.odometer');
		odo.each(function() {
			var countNumber = $(this).attr('data-count');
			$(this).html(countNumber);
		});
	});

	// Partner Slider JS
	$('.partner-slider').owlCarousel({
		loop: true,
		margin: 0,
		nav: false,
		dots: false,
		smartSpeed: 1000,
		autoplay: true,
		autoplayTimeout: 4000,
		autoplayHoverPause: true,
		responsive:{
			0:{
				items: 2,
			},
			600:{
				items: 3,
			},
			1000:{
				items: 6,
			}
		}
	});

	// Support Slider JS
	$('.support-slider').owlCarousel({
		loop: true,
		margin: 0,
		nav: false,
		dots: false,
		smartSpeed: 1000,
		autoplay: true,
		autoplayTimeout: 4000,
		autoplayHoverPause: true,
		responsive:{
			0:{
				items: 2,
			},
			600:{
				items: 3,
			},
			1000:{
				items: 6,
			}
		}
	});

	// Portfolio Slider JS
	$('.portfolio-slider').owlCarousel({
		loop: true,
		margin: 20,
		nav: true,
		dots: false,
		smartSpeed: 1000,
		autoplay: true,
		autoplayTimeout: 4000,
		autoplayHoverPause: true,
		navText: [
            "<i class='bx bx-left-arrow-alt'></i>",
            "<i class='bx bx-right-arrow-alt'></i>"
        ],
		responsive:{
			0:{
				items: 1,
			},
			600:{
				items: 2,
			},
			1000:{
				items: 4,
			}
		}
	});

	// Testimonials Slider JS
	$('.testimonials-slider').owlCarousel({
		items: 1,
		loop: true,
		margin: 20,
		nav: true,
		dots: false,
		smartSpeed: 1000,
		autoplay: true,
		autoplayTimeout: 4000,
		autoplayHoverPause: true,
		navText: [
			"<i class='bx bx-left-arrow-alt'></i>",
			"<i class='bx bx-right-arrow-alt'></i>"
		],
	});

	// Team Share JS
	$('.share-btn').on('click', function(){
		$(this).siblings('.team-social').slideToggle('fast')
	});

	// Accordion JS
	$('.accordion > li:eq(0) a').addClass('active').next().slideDown();
	$('.accordion a').on('click', function(j) {
		var dropDown = $(this).closest('li').find('p');
		$(this).closest('.accordion').find('p').not(dropDown).slideUp();
		if ($(this).hasClass('active')) {
			$(this).removeClass('active');
		} else {
			$(this).closest('.accordion').find('a.active').removeClass('active');
			$(this).addClass('active');
		}
		dropDown.stop(false, true).slideToggle();
		j.preventDefault();
	});
	
	// Clients Slider JS
	$('.client-slider').owlCarousel({
		items: 1,
		loop: true,
		margin: 15,
		singleItem: true,
		nav: true,
		dots: false,
		smartSpeed: 1000,
		autoplay: true,
		autoplayTimeout: 4000,
		autoplayHoverPause: true,
		navText: [
            "<i class='bx bx-left-arrow-alt'></i>",
            "<i class='bx bx-right-arrow-alt'></i>"
        ],
	});

	// Subscribe Form JS
	$('.newsletter-form').validator().on('submit', function (event) {
		if (event.isDefaultPrevented()) {
			// Hande the invalid form...
			formErrorSub();
			submitMSGSub(false, 'Please enter your email correctly.');
		} else {
			// Everything looks good!
			event.preventDefault();
		}
	});
	function callbackFunction (resp) {
		if (resp.result === 'success') {
			formSuccessSub();
		}
		else {
			formErrorSub();
		}
	}
	function formSuccessSub(){
		$('.newsletter-form')[0].reset();
		submitMSGSub(true, 'Thank you for subscribing!');
		setTimeout(function() {
			$('#validator-newsletter').addClass('hide');
		}, 4000)
	}
	function formErrorSub(){
		$('.newsletter-form').addClass('animated shake');
		setTimeout(function() {
			$('.newsletter-form').removeClass('animated shake');
		}, 1000)
	}
	function submitMSGSub(valid, msg){
		if(valid){
			var msgClasses = 'validation-success';
		} else {
			var msgClasses = 'validation-danger';
		}
		$('#validator-newsletter').removeClass().addClass(msgClasses).text(msg);
	}
	
	// AJAX Mail Chimp JS
	$('.newsletter-form').ajaxChimp({
		url: 'https://envytheme.us20.list-manage.com/subscribe/post?u=60e1ffe2e8a68ce1204cd39a5&amp;id=42d6d188d9', // Your url MailChimp
		callback: callbackFunction
	});

	// Preloader JS
	$(window).on('load', function() {
		$('.loader').addClass('loader-deactivate');
	});

	// Back to Top JS
	$(function(){
		$(window).on('scroll', function(){
			var scrolled = $(window).scrollTop();
			if (scrolled > 500) $('.go-top').addClass('active');
			if (scrolled < 500) $('.go-top').removeClass('active');
		});  
		$('.go-top').on('click', function() {
			$('html, body').animate({ scrollTop: '0' },  500);
		});
	});
}(jQuery));