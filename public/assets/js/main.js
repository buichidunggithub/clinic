(function ($) {
  'use strict'

  // pagination////////////////
  $('.pagination-inner a').on('click', function () {
    $(this).siblings().removeClass('pagination-active')
    $(this).addClass('pagination-active')
  })
  /* 1. Proloder */
  $(window).on('load', function () {
    $('#preloader-active').delay(450).fadeOut('slow')
    $('body').delay(450).css({
      overflow: 'visible'
    })
  })

  /* 2. sticky And Scroll UP */
  $(window).on('scroll', function () {
    var scroll = $(window).scrollTop()
    if (scroll < 400) {
      $('.header-sticky').removeClass('sticky-bar')
      $('#back-top').fadeOut(500)
    } else {
      $('.header-sticky').addClass('sticky-bar')
      $('#back-top').fadeIn(500)
    }
  })

  // Scroll Up
  $('#back-top a').on('click', function () {
    $('body,html').animate({
      scrollTop: 0
    }, 800)
    return false
  })

  /* 3. slick Nav */
  // mobile_menu
  var menu = $('ul#navigation')
  if (menu.length) {
    menu.slicknav({
      prependTo: '.mobile_menu',
      closedSymbol: '+',
      openedSymbol: '-'
    })
  };

  /* 4. MainSlider-1 */
  // h1-hero-active
  function mainSlider () {
    var BasicSlider = $('.slider-active')
    BasicSlider.on('init', function (e, slick) {
      var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]')
      doAnimations($firstAnimatingElements)
    })
    BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
      var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]')
      doAnimations($animatingElements)
    })
    BasicSlider.slick({
      autoplay: false,
      autoplaySpeed: 4000,
      dots: false,
      fade: true,
      arrows: false,
      prevArrow: '<button type="button" class="slick-prev"><i class="ti-angle-left"></i></button>',
      nextArrow: '<button type="button" class="slick-next"><i class="ti-angle-right"></i></button>',
      responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false
        }
      }
      ]
    })

    function doAnimations (elements) {
      var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend'
      elements.each(function () {
        var $this = $(this)
        var $animationDelay = $this.data('delay')
        var $animationType = 'animated ' + $this.data('animation')
        $this.css({
          'animation-delay': $animationDelay,
          '-webkit-animation-delay': $animationDelay
        })
        $this.addClass($animationType).one(animationEndEvents, function () {
          $this.removeClass($animationType)
        })
      })
    }
  }
  mainSlider()

  /* 4. Testimonial Active */
  var testimonial = $('.h1-testimonial-active')
  if (testimonial.length) {
    testimonial.slick({
      dots: false,
      infinite: true,
      speed: 1000,
      autoplay: true,
      loop: true,
      arrows: false,
      prevArrow: '<button type="button" class="slick-prev"><i class="ti-arrow-top-left"></i></button>',
      nextArrow: '<button type="button" class="slick-next"><i class="ti-arrow-top-right"></i></button>',
      slidesToShow: 1,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: false,
            arrow: false
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false
          }
        }
      ]
    })
  }

  /* 6. Nice Selectorp  */
  var nice_Select = $('select')
  if (nice_Select && typeof nice_Select.niceSelect === 'function') {
    nice_Select.niceSelect()
  }

  // Brand Active
  $('.brand-active').slick({
    dots: false,
    infinite: true,
    autoplay: true,
    speed: 400,
    arrows: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 3,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 3,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  })

  // Single Img slder
  $('.man-slider-active').slick({
    dots: false,
    infinite: true,
    autoplay: true,
    speed: 400,
    arrows: true,
    prevArrow: '<button type="button" class="slick-prev"><i class="ti-angle-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="ti-angle-right"></i></button>',
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  })

  /* 7. data-background */
  $('[data-background]').each(function () {
    $(this).css('background-image', 'url(' + $(this).attr('data-background') + ')')
  })

  /* 10. WOW active */
  new WOW().init()

  /*
	    Carousel
	*/
  $('#carousel-example').on('slide.bs.carousel', function (e) {
	    /*
	        CC 2.0 License Iatek LLC 2018
	        Attribution required
	    */
	    var $e = $(e.relatedTarget)
	    var idx = $e.index()
	    var itemsPerSlide = 5
	    var totalItems = $('.carousel-item').length

	    if (idx >= totalItems - (itemsPerSlide - 1)) {
	        var it = itemsPerSlide - (totalItems - idx)
	        for (var i = 0; i < it; i++) {
	            // append slides to end
	            if (e.direction == 'left') {
	                $('.carousel-item').eq(i).appendTo('.carousel-inner')
	            } else {
	                $('.carousel-item').eq(0).appendTo('.carousel-inner')
	            }
	        }
	    }
  })

  // 11. ---- Mailchimp js --------//
  function mailChimp () {
    $('#mc_embed_signup').find('form').ajaxChimp()
  }
  mailChimp()

  // 12 Pop Up Img
  var popUp = $('.single_gallery_part, .img-pop-up')
  if (popUp.length) {
    popUp.magnificPopup({
      type: 'image',
      gallery: {
        enabled: true
      }
    })
  }
  // 12 Pop Up Video
  var popUp = $('.popup-video')
  if (popUp.length) {
    popUp.magnificPopup({
      type: 'iframe'
    })
  }

  /* 13. counterUp */

  /* 14. Datepicker */
  //   $('#datepicker1').datepicker();

  // // 15. Time Picker
  //   $('#timepicker').timepicker();

  // Modal Activation
  $('.search-switch').on('click', function () {
    $('.search-model-box').fadeIn(400)
  })

  $('.search-close-btn').on('click', function () {
    $('.search-model-box').fadeOut(400, function () {
      $('#search-input').val('')
    })
  })
})(jQuery);

(function ($) {
  'use strict'
  $.fn.sliderResponsive = function (settings) {
    var set = $.extend(
      {
        slidePause: 5000,
        fadeSpeed: 800,
        autoPlay: 'on',
        showArrows: 'off',
        hideDots: 'off',
        hoverZoom: 'on',
        titleBarTop: 'off'
      },
      settings
    )

    var $slider = $(this)
    var size = $slider.find('> div').length // number of slides
    var position = 0 // current position of carousal
    var sliderIntervalID // used to clear autoplay

    // Add a Dot for each slide
    $slider.append('<ul></ul>')
    $slider.find('> div').each(function () {
      $slider.find('> ul').append('<li></li>')
    })

    // Put .show on the first Slide
    $slider.find('div:first-of-type').addClass('show')

    // Put .showLi on the first dot
    $slider.find('li:first-of-type').addClass('showli')

    // fadeout all items except .show
    $slider.find('> div').not('.show').fadeOut()

    // If Autoplay is set to 'on' than start it
    if (set.autoPlay === 'on') {
      startSlider()
    }

    // If showarrows is set to 'on' then don't hide them
    if (set.showArrows === 'on') {
      $slider.addClass('showArrows')
    }

    // If hideDots is set to 'on' then hide them
    if (set.hideDots === 'on') {
      $slider.addClass('hideDots')
    }

    // If hoverZoom is set to 'off' then stop it
    if (set.hoverZoom === 'off') {
      $slider.addClass('hoverZoomOff')
    }

    // If titleBarTop is set to 'on' then move it up
    if (set.titleBarTop === 'on') {
      $slider.addClass('titleBarTop')
    }

    // function to start auto play
    function startSlider () {
      sliderIntervalID = setInterval(function () {
        nextSlide()
      }, set.slidePause)
    }

    // on mouseover stop the autoplay
    $slider.mouseover(function () {
      if (set.autoPlay === 'on') {
        clearInterval(sliderIntervalID)
      }
    })

    // on mouseout starts the autoplay
    $slider.mouseout(function () {
      if (set.autoPlay === 'on') {
        startSlider()
      }
    })

    // on right arrow click
    $slider.find('> .right').click(nextSlide)

    // on left arrow click
    $slider.find('> .left').click(prevSlide)

    // Go to next slide
    function nextSlide () {
      position = $slider.find('.show').index() + 1
      if (position > size - 1) position = 0
      changeCarousel(position)
    }

    // Go to previous slide
    function prevSlide () {
      position = $slider.find('.show').index() - 1
      if (position < 0) position = size - 1
      changeCarousel(position)
    }

    // when user clicks slider button
    $slider.find(' > ul > li').click(function () {
      position = $(this).index()
      changeCarousel($(this).index())
    })

    // this changes the image and button selection
    function changeCarousel () {
      $slider.find('.show').removeClass('show').fadeOut()
      $slider
        .find('> div')
        .eq(position)
        .fadeIn(set.fadeSpeed)
        .addClass('show')
      // The Dots
      $slider.find('> ul').find('.showli').removeClass('showli')
      $slider.find('> ul > li').eq(position).addClass('showli')
    }

    return $slider
  }
  $('#slider1').sliderResponsive({

  })

  $('#slider2').sliderResponsive({
    fadeSpeed: 300,
    autoPlay: 'off',
    showArrows: 'on',
    hideDots: 'on'
  })

  $('#slider3').sliderResponsive({
    hoverZoom: 'off',
    hideDots: 'on'
  })
  /// count///////

  // ------------ Counter BEGIN ------------
  // $(".counter__increment, .counter__decrement").click(function(e)
  // {
  //   var $this = $(this);
  //   var $counter__input = $(this).parent().find(".counter__input");
  //   var $currentVal = parseInt($(this).parent().find(".counter__input").val());

  //   //Increment
  //   if ($currentVal != NaN && $this.hasClass('counter__increment'))
  //   {
  //     $counter__input.val($currentVal + 1);
  //   }
  //   //Decrement
  //   else if ($currentVal != NaN && $this.hasClass('counter__decrement'))
  //   {
  //     if ($currentVal >= 1) {
  //       $counter__input.val($currentVal - 1);
  //     }
  //   }
  // });
  // ------------ Counter END ------------

  /// ///datetimepicker///////
  // $('.input-daterange').datepicker({
  //   format: 'dd-mm-yyyy',
  //   todayHighlight: true,
  //   startDate: '01-01-2015'
  // })
})(jQuery)
// $('.input-daterange input').each(function() {
//   $(this).datepicker('clearDates');
// });
