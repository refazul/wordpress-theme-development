(function ($) {
	"use strict";
	
	$('a[href=\\#]').on('click', function (e) {
		e.preventDefault();
	});
	
  /*-------------------------------------
  ## Utility function - for keeping same height widget
  -------------------------------------*/
	function sameHeight(selector) {
    var elements = $(selector);
    var max_height = 0;
    elements.each(function(index, el) {
      var height = $(el).height();
      if (height > max_height) {
        max_height = height;
      }
    });
	elements.height(max_height);
	}
	
  /*-------------------------------------
  ## Utility function - making things square
  -------------------------------------*/
  $.fn.squareMaker = function() {
    this.each(function(index, el) {
      var width = $(el).width();
      $(el).height(width);
    });
    return this;
  };

  /*-------------------------------------
  ## Utility function - calculating wordpress
  ## admin bar height
  -------------------------------------*/
  var calculateWpAdminHeight = function () {
    var wpadminbar = $('#wpadminbar');
    var wpadminbarHeight = 0;
    if (wpadminbar) {
      wpadminbarHeight = wpadminbar.outerHeight();
    }
    return wpadminbarHeight;
  }

  /*-------------------------------------
  ## Utility function - calculating
  ## mean menu height
  -------------------------------------*/
  var calculateMeanMenuHeight = function () {
    var meanMenu = $('#header-menu-mobile');
    var meanHeight = 0;
    if (meanMenu) {
      meanHeight = meanMenu.outerHeight();
    }
    return meanHeight ? meanHeight : 0;
  }
  var calculateMenuHeight = function () {
    var headerMenu = $('#header-menu-desktop');
    var menuHeight = 0;
    if (headerMenu) {
      menuHeight = headerMenu.outerHeight();
    }
    return menuHeight ? menuHeight : 0;
  }

  var calculateExtraOffset = function () {
    var extraOffset = 0;
    if ( $('body').hasClass('has-sticky-menu-remove')) {
      var meanMenuHeight = calculateMeanMenuHeight();
      var menuHeight  = calculateMenuHeight();
      extraOffset = meanMenuHeight ? meanMenuHeight : menuHeight;
    }
    return extraOffset;
  }
  
  /*-------------------------------------
    MeanMenu activation code
    --------------------------------------*/
  var a = $('.offscreen-navigation .menu');

    if (a.length) {
        a.children("li").addClass("menu-item-parent");
        a.find(".menu-item-has-children > a").on("click", function (e) {
            e.preventDefault();
            $(this).toggleClass("opened");
            var n = $(this).next(".sub-menu"),
                s = $(this).closest(".menu-item-parent").find(".sub-menu");
            a.find(".sub-menu").not(s).slideUp(250).prev('a').removeClass('opened'), n.slideToggle(250)
        });
        a.find('.menu-item:not(.menu-item-has-children) > a').on('click', function (e) {
            $('.rt-slide-nav').slideUp();
            $('body').removeClass('slidemenuon');
        });
    }

  $('.mean-bar .sidebarBtn').on('click', function (e) {
  e.preventDefault();
  if ($('.rt-slide-nav').is(":visible")) {
    $('.rt-slide-nav').slideUp();
    $('body').removeClass('slidemenuon');
  } else {
    $('.rt-slide-nav').slideDown();
    $('body').addClass('slidemenuon');
  }

  });

	/*-------------------------------------
	Jquery Serch Box
	-------------------------------------*/
	var searchBoxFn = function () {
		
		$('a[href="#header-search"]').on("click", function (event) {
			event.preventDefault();
			
			var target = $(".header_search-field");
			target.removeClass("close-change");
			target.addClass("header_search-open");
			
			var self_item_glass = $('a[href="#header-search"]');
			self_item_glass.addClass("close-change");			
			self_item_glass.removeClass("open-change");			
			
			var self_item_cross = $('a[href="#header-cross"]');
			self_item_cross.addClass("open-change");
			self_item_cross.removeClass("close-change");
			
			setTimeout(function () {
			target.find('input').focus();
			}, 600);
			return false;
		});
		
		$('a[href="#header-cross"]').on("click", function (event) {
			event.preventDefault();
			
			var target = $(".header_search-field");
			target.addClass("close-change");
			target.removeClass("header_search-open");
			
			var self_item_glass = $('a[href="#header-search"]');
			self_item_glass.removeClass("close-change");
			self_item_glass.addClass("open-change");
			
			var self_item_cross = $('a[href="#header-cross"]');
			self_item_cross.removeClass("open-change");
			self_item_cross.addClass("close-change");
			
			setTimeout(function () {
			target.find('input').focus();
			}, 600);
			return false;
		});
				
	}  

	var offcanvasMenu = function () {
    /*-------------------------------------
    Offcanvas Menu activation code
    -------------------------------------*/
    $('#wrapper').on('click', '.offcanvas-menu-btn', function (e) {
        e.preventDefault();
        var $this = $(this),
            wrapper = $(this).parents('body').find('>#wrapper'),
            wrapMask = $('<div />').addClass('offcanvas-mask'),
            offcanvasTarget = $(this).data('target'),
            offcanvas = $(offcanvasTarget),
            position = offcanvas.data('position') || 'left';
            wrapMask.css({
              "animation-name": position == 'left' ? 'slideInLeft' : 'slideInRight',
            });

        if ($this.hasClass('menu-status-open')) {
            wrapper.addClass('open').append(wrapMask);
            $this.removeClass('menu-status-open').addClass('menu-status-close');
            offcanvas.css({
                'transform': 'translateX(0)',
                'top': calculateWpAdminHeight(),
            });
        } else {
            removeOffcanvas();
        }

        function removeOffcanvas() {
            wrapper.removeClass('open').find('> .offcanvas-mask').remove();
            $this.removeClass('menu-status-close').addClass('menu-status-open');
            var transformProperty = 'translateX(-100%)';
            if ( optimaxObject.is_rtl ) {
              transformProperty = position === 'left'  ? 'translateX(100%)' : 'translateX(-100%)';
            } else {
              transformProperty = position === 'left'  ? 'translateX(-100%)' : 'translateX(100%)';
            }
            offcanvas.css({
                'transform': transformProperty,
            });
        }
        $(".offcanvas-mask, .offcanvas-close").on('click', function () {
            removeOffcanvas();
        });

        return false;
    });
  }

  var offcanvasNestedMenuClick = function () {
    var li_has_children = $('.offcanvas-menu > ul  li.menu-item-has-children');
    var button = $('<button>').text('+').addClass('offcanvas-nested-opener');
    li_has_children.append(button);
    $('.offcanvas-nested-opener').on('click', function () {
      var $this = $(this);
      var submenu = $this.siblings('.sub-menu');
      if ($this.hasClass('already-open')) {
        $this.removeClass('already-open')
        $this.text('+')
        submenu.slideUp(300);
      } else {
        $this.addClass('already-open')
        $this.text('-')
        submenu.slideDown(300)
      }
    })
  }

  function rdtheme_wc_scripts($){

    /*---------------------------------
    ## WooCommerce
    ----------------------------------*/
    
    /* Shop change view */
    $('#shop-view-mode li a').on('click',function(){
      $('body').removeClass('product-grid-view product-list-view');

      if ( $(this).closest('li').hasClass('list-view-nav')) {
        $('body').addClass('product-list-view');
        Cookies.set('shopview', 'list');
      }
      else{
        $('body').addClass('product-grid-view');
        Cookies.remove('shopview');
      }
      return false;
    });

  /* when product quantity changes, update quantity attribute on add-to-cart button */
    $("form.cart").on("change", "input.qty", function () {
        if (this.value === "0")
            this.value = "1";

        $(this.form).find("button[data-quantity]").data("quantity", this.value);
    });

    /* remove old "view cart" text, only need latest one thanks! */
    $(document.body).on("adding_to_cart", function () {
        $("a.added_to_cart").remove();
    });

    /*variable ajax cart end*/
    $('.quantity').on('click', '.plus', function (e) {
        var self = $(this),
            $input = self.prev('input.qty'),
            target = self.parents('form').find('.product_type_simple'),
            val = parseInt($input.val(), 10) + 1;
        target.attr("data-quantity", val);
        $input.val(val);

        return false;
    });

    $('.quantity').on('click', '.minus', function (e) {
        var self = $(this),
            $input = self.next('input.qty'),
            target = self.parents('form').find('.product_type_simple'),
            val = parseInt($input.val(), 10);
        val = (val > 1) ? val - 1 : val;
        target.attr("data-quantity", val);
        $input.val(val);
        return false;
    });

  }

  function stickySidebarFn($) {
    if ( $.fn.theiaStickySidebar ) {
      $('.rt-content, .rt-sidebar').theiaStickySidebar({
        // Settings
        additionalMarginTop: 200,
        additionalMarginBottom: 200
      });
    }
  }

  /*-------------------------------------
  ## Section background image
  -------------------------------------*/
  function imageFunction() {
    $('[data-bg-image]').each(function () {
      var img = $(this).data('bg-image');
      $(this).css({
        backgroundImage: 'url(' + img + ')',
      });
    });
  }

  function onReadyScripts() {
    /*-------------------------------------
     ## for making image background
     -------------------------------------*/
     imageFunction();
	
	$(window).on('scroll', function () {
        if ($('body').hasClass('sticky-header')) {
            var
                menu = $("#header-menu-desktop"),
                menuH = menu.outerHeight(),
                topHeaderH = $('.header-top-bar').outerHeight() || 0,
                targrtScroll = topHeaderH;
            if ($(window).scrollTop() > targrtScroll) {
                menu.addClass('sticky-menu');
            } else {
                menu.removeClass('sticky-menu');
            }
        }
    });
	

    /*-------------------------------------
    On Scroll 
    -------------------------------------*/
    $(window).on('scroll', function () {

        // Back Top Button
        if ($(window).scrollTop() > 500) {
            $('.scrollup').addClass('back-top');
        } else {
            $('.scrollup').removeClass('back-top');
        }
    });
    // On Click Section Switch
    // used for back-top
    $('[data-type="section-switch"]').on('click', function () {
      if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
        var target = $(this.hash);
        if (target.length > 0) {

          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });

    /*-------------------------------------
    ## popup youtube video
    -------------------------------------*/
    var yPopup = $(".popup-youtube");
    if (yPopup.length) {
      yPopup.magnificPopup({
        disableOn: 200,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
      });
    }

    /*-------------------------------------
    ## Counter
    -------------------------------------*/
    var counterContainer = $('.counter');
    counterContainer.each(function(index, el) {
      var counter_delay = $( el ).data( 'delay' ) || 50;
      var counter_time = $( el ).data( 'time' ) || 2000;
      var counter_option = {
        delay: counter_delay,
        time: counter_time
      }
      $( el ).counterUp(counter_option);
    });

    /*-------------------------------------
    ## makebg
    -------------------------------------*/
    $('[data-make-bg]').each(function (e) {
      var img = $(this).data('make-bg');
      $(this).css({
        'background-image': 'url(' + img + ')',
        'background-repeat'   : 'no-repeat',
        'background-position' : 'center',
        'background-size'     : 'cover',

      })
    });

    /*-------------------------------------
    ## only invocation
    -------------------------------------*/
    // Offcanvas menu call
    offcanvasMenu()

    /*-------------------------------------
    ## shop grid initialization
    -------------------------------------*/
    rdtheme_wc_scripts($);
	
	/* Wow Js Init */ 
	var wow = new WOW ( { 
		boxClass: 'wow', 
		animateClass: 'animated', 
		offset: 0, 
		mobile: false, 
		live: true, 
		scrollContainer: null, 
	});
	
	new WOW().init();

  } // end onReadyScripts function ended

  function onLoadScripts() {

    $('#preloader').fadeOut('slow', function () {
      $(this).remove();
    });

    $('.header-menu-content nav').navpoints({
        updateHash:true
    });


    var extraOffset = calculateExtraOffset();
    if ( window.elementorFrontend && elementorFrontend.hooks ) {
      elementorFrontend.hooks.addFilter( 'frontend/handlers/menu_anchor/scroll_top_distance', function( scrollTop ) {
        return scrollTop - extraOffset;
      } );
    }

     /*-------------------------------------
    ## Blog masonry layout
    -------------------------------------*/
    if (typeof Isotope  !== "undefined") {
      setTimeout(function () {
        var $grid = $('.masonry-grid').isotope({
          itemSelector: '.masonry-grid-item',
        })
      }, 1200)
    }

    /*--------------------------------------
    Isotope initialization
    --------------------------------------*/
    var $container = $(".isotope-wrap");
    if ($container.length > 0 && typeof Isotope  !== "undefined") {
      var $isotope;
      var blogGallerIso = $(".featuredContainer", $container).imagesLoaded(function () {
        $isotope = $(".featuredContainer", $container).isotope({
          isOriginLeft: optimaxObject.is_rtl ? false : true,
          filter: "*",
          transitionDuration: "1s",
          hiddenStyle: {
            opacity: 0,
            transform: "scale(0.001)"
          },
          visibleStyle: {
            transform: "scale(1)",
            opacity: 1
          }
        });
      });
      $container.find(".isotope-classes-tab").on("click", "a", function () {
        var $this = $(this);
        $this
        .parent(".isotope-classes-tab")
        .find("a")
        .removeClass("current");
        $this.addClass("current");
        var selector = $this.attr("data-filter");
        $isotope.isotope({
          filter: selector
        });
        return false;
      });
    }



    offcanvasNestedMenuClick();
    searchBoxFn();

    // calling css vars ponyfills
    cssVars({
      onlyLegacy: true, // default
      onComplete: function (cssText, styleElms, cssVariables, benchmark) {
      },
      onError: function(message, elm, xhr, url) {
      },
    });

    // calling sticky sidebar
    stickySidebarFn($);

     /*-------------------------------------
     ## owl carousel (when initiate options using php)
     -------------------------------------*/

     if (typeof $.fn.owlCarousel == 'function') {
       $(".owl-custom-nav .owl-next").on('click', function () {
         $(this).closest('.owl-wrap').find('.owl-carousel').trigger('next.owl.carousel');
       });
       $(".owl-custom-nav .owl-prev").on('click', function () {
         $(this).closest('.owl-wrap').find('.owl-carousel').trigger('prev.owl.carousel');
       });
       $(".rt-owl-carousel").each(function () {
         var options = $(this).data('carousel-options');
         $(this).owlCarousel(options);
       });
     }

     /*-------------------------------------
     ## Slick Slider
     -------------------------------------*/
     if ($.fn.slick) {
      $('.slick-carousel').each(function () {
        let $carousel = $(this);
        $carousel.imagesLoaded(function () {
          var data = $carousel.data('slick'),
          slidesToShowTab = data.slidesToShowTab,
          slidesToShowMobile = data.slidesToShowMobile;
          $carousel.not('.slick-initialized').slick({
            centerPadding: '10px',
            responsive: [{
              breakpoint: 992,
              settings: {
                slidesToShow: slidesToShowTab,
                slidesToScroll: slidesToShowTab
              }
            },
            {
              breakpoint: 767,
              settings: {
                slidesToShow: slidesToShowMobile,
                slidesToScroll: slidesToShowMobile
              }
            }
            ]
          });
        });
      });
    }

    // countdown 
    // for 
    // under construction area
    if ( typeof $.fn.countdown == 'function' && $('.idcountdown').data('countdown') ) {
      try {
        var eventCountdownTime = $('.idcountdown').data('countdown'),
        day    = (optimaxObject.day == 'Day') ? 'Day%!D' : optimaxObject.day,
        hour   = (optimaxObject.hour == 'Hour') ? 'Hour%!D' : optimaxObject.hour,
        minute = (optimaxObject.minute == 'Minute') ? 'Minute%!D' : optimaxObject.minute,
        second = (optimaxObject.second == 'Second') ? 'Second%!D' : optimaxObject.second;
        $('.idcountdown')
        .countdown(eventCountdownTime)
        .on('update.countdown', function(event) {
          $(this).html(event.strftime(''
            + '<div class="countdown-section"><div class="countdown-number">%D</div><div class="countdown-unit">'+day+'</div></div>'
            + '<div class="countdown-section"><div class="countdown-number">%H</div><div class="countdown-unit">'+hour+'</div></div>'
            + '<div class="countdown-section"><div class="countdown-number">%M</div><div class="countdown-unit">'+minute+'</div></div>'
            + '<div class="countdown-section"><div class="countdown-number">%S</div><div class="countdown-unit">'+second+'</div></div>'));
        })
        .on('finish.countdown', function(event) {
          $(this).html(event.strftime(''));
        });
        
      }
      catch(err) {
        console.log('Event Countdown : '+err.message);
      }      
    }

    // Elementor Widget - team
    
    sameHeight( '.sameHeight .rtel-blog-post-1 .blog-box-layout1' );

    // Elementor Widget Case Study
    sameHeight( '.sameHeight .rtel-case-study-1 .rtin-case-study-box-layout1 .rtin-content' );
   
    // just below line onLoadScripts fn ended
  }

  /*---------------------------------------------------------------
  ## loading all scripts after document ready
  ---------------------------------------------------------------*/

  $(document).ready(function () {
    onReadyScripts();
  })
  $(window).on('load', function () {
    onLoadScripts();
  })

  /*-------------------------------------
  ## elementor frontend hooks
  -------------------------------------*/
  $(window).on('elementor/frontend/init', function () {
    if (elementorFrontend.isEditMode()) {
      elementorFrontend.hooks.addAction('frontend/element_ready/widget', function () {
        onReadyScripts();
        onLoadScripts();
      });
    }
  });
})(jQuery);



