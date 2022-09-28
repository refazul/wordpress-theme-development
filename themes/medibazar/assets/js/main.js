jQuery.noConflict();
(function ($) {
	"use strict";

	// meanmenu
	$('#mobile-menu').meanmenu({
		meanMenuContainer: '.mobile-menu',
		meanScreenWidth: "992"
	});

	// info-bar
	$('.info-bar').on('click', function (e) {
		e.preventDefault();
		$('.extra-info').addClass('info-open');
	})

	$('.close-icon').on('click', function () {
		$('.extra-info').removeClass('info-open');
	})

	$('.sidebar-overlay').on('click', function () {
		$('.extra-info').removeClass('info-open');
	})

	// cat - toggle
	$('.cat-toggle').on('click', function () {
		$('.category-menu').slideToggle(500);
	});


	// sticky
	var wind = $(window);
	var sticky = $('#sticky-header');
	wind.on('scroll', function () {
		var scroll = wind.scrollTop();
		if (scroll < 100) {
			sticky.removeClass('sticky');
		} else {
			sticky.addClass('sticky');
		}
	});


	// active
	$('.service-box').on('mouseenter', function () {
		$(this).addClass('active').parent().siblings().find('.service-box').removeClass('active');
	})

	// test-02-active
	$('.test-02-active').slick({
		dots: true,
		arrows: true,
		infinite: true,
		autoplay:true,
		speed: 300,
		prevArrow: '<button type="button" class="slick-prev"><i class="fal fa-long-arrow-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="fal fa-long-arrow-right"></i></button>',
		slidesToShow: 1,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 1500,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
				}
			},
			{
				breakpoint: 550,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
				}
			}
		]
	});
	
	// test-03-active
	$('.test-03-active').slick({
		dots: false,
		arrows: true,
		infinite: true,
		autoplay:true,
		speed: 300,
		prevArrow: '<button type="button" class="slick-prev"><i class="fal fa-long-arrow-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="fal fa-long-arrow-right"></i></button>',
		slidesToShow: 1,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 1500,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
				}
			},
			{
				breakpoint: 550,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
				}
			}
		]
	});

	// pro-active
	$('.pro-active').slick({
		dots: false,
		arrows: false,
		infinite: true,
		speed: 300,
		prevArrow: '<button type="button" class="slick-prev"><i class="fal fa-long-arrow-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="fal fa-long-arrow-right"></i></button>',
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 1500,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 550,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});

	/* magnificPopup video view */
	$('.popup-video').magnificPopup({
		type: 'iframe'
	});

	/* magnificPopup img view */
	$('.popup-image').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true
		}
	});

	// scrollToTop
	$.scrollUp({
		scrollName: 'scrollUp', // Element ID
		topDistance: '300', // Distance from top before showing element (px)
		topSpeed: 300, // Speed back to top (ms)
		animation: 'fade', // Fade, slide, none
		animationInSpeed: 200, // Animation in speed (ms)
		animationOutSpeed: 200, // Animation out speed (ms)
		scrollText: '<i class="fas fa-angle-up"></i>', // Text for element
		activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	});

	// WOW active
	new WOW().init();


	if (typeof ($.fn.knob) != 'undefined') {
		$('.knob').each(function () {
		  var $this = $(this),
			knobVal = $this.attr('data-rel');

		  $this.knob({
			'draw': function () {
			  $(this.i).val(this.cv + '%')
			}
		  });

		  $this.appear(function () {
			$({
			  value: 0
			}).animate({
			  value: knobVal
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function () {
				$this.val(Math.ceil(this.value)).trigger('change');
			  }
			});
		  }, {
			accX: 0,
			accY: -150
		  });
		});
	}

	$(document).ready(function () {
		$(".flex-control-thumbs").addClass("owl-carousel");
		
		$('.flex-control-thumbs').owlCarousel({
			items: 4,
			pagination: true,
			rewindNav: true,
			itemsTablet : [992,3],
			itemsDesktopSmall :[768,3],
			itemsDesktop : [992,1],
			itemsMobile : [479,3],
		});
		
		$('.dropdown').click(function(e) {
			e.stopPropagation();
		});

		$('.dropdown').children('.dropdown-toggle').on('click', function(event){
			event.preventDefault();
			$(this).toggleClass('submenu-open').next('.dropdown-menu').slideToggle(300).end().parent('.dropdown').siblings('.dropdown').children('.dropdown-toggle').removeClass('submenu-open').next('.dropdown-menu').slideUp(300);
		});
		
		$(".blog-area .widget select, .klb-post select, .klbfooterwidget select, table.variations select" ).wrap( "<div class='custom_select'></div>" );


		$(".widget_product_categories ul.product-categories > li.cat-parent").append('<span class="subDropdown plus"></span>');
	
		$(".subDropdown")[0] && $(".subDropdown").on("click", function() {
			$(this).toggleClass("plus"), $(this).toggleClass("minus"), $(this).parent().find("ul").slideToggle()
		});


	});

	$(window).load(function(){
		$('#preloader').fadeOut('slow',function(){$(this).remove();});
	});

})(jQuery);