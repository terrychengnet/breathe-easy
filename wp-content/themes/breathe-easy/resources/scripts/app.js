import domReady from '@roots/sage/client/dom-ready';

// Slick slider
import 'slick-carousel/slick/slick.min.js';

/**
 * Application entrypoint
 */
domReady(async () => {
  // Header Scroll
  let headerScroll = function (){
    $(window).scroll(function(){
      let header = $('.header');
      var headerHeight = header.height();
      var windowHeight = ( $(window).scrollTop() );
      if( windowHeight > headerHeight ){
        header.addClass('scroll');
      } else {
        header.removeClass('scroll');
      }
     });
  }
  headerScroll();

  // Hamburger Menu
  let hamburgerBtn = function () {
    $('.menuBtn').on('click', function () {
      $('.menuBtn_lines').toggleClass('open');
      $('.header').toggleClass('fill');
      $('.mobile-menu').slideToggle(100);
    });
  }
  hamburgerBtn();

  // Timeline
  let timeline = function() {
    var items = $(".timeline-dot"),
    timelineHeight = $(".timeline ul").height(),
    greyLine = $('.default-line'),
    lineToDraw = $('.draw-line');

    // sets the height that the greyLine (.default-line) should be according to `.timeline ul` height

    // run this function only if draw line exists on the page
    if(lineToDraw.length) {
      $(window).on('scroll', function () {

        // Need to constantly get '.draw-line' height to compare against '.default-line'
        var redLineHeight = lineToDraw.height(),
        greyLineHeight = greyLine.height(),
        windowDistance = $(window).scrollTop(),
        windowHeight = $(window).height() / 2,
        timelineDistance = $(".timeline").offset().top;

        if(windowDistance >= timelineDistance - windowHeight) {
          var line = windowDistance - timelineDistance + windowHeight;

          if(line <= greyLineHeight) {
            lineToDraw.css({
              'height' : line + 20 + 'px'
            });
          }
        }

        // This takes care of adding the class in-view to the li:before items
        var bottom = lineToDraw.offset().top + lineToDraw.outerHeight(true);
        items.each(function(index){
          var circlePosition = $(this).offset();

          if(bottom > circlePosition.top) {				
            $(this).addClass('in-view');
          } else {
            $(this).removeClass('in-view');
          }
        });	
      });
    }
  }
  timeline();

  // Testimonial Slider
  var testimonial_slider = function() {
    // var slider = $('.testimonials-slider');
    // if (slider.lendth) {
    //   $('.testimonials-slider').slick({
    //     infinite: true,
    //     slidesToShow: 3,
    //     slidesToScroll: 3
    //   });
    // }
    let slider = $('.testimonial-slider');
      if (slider.length > 0) {
        slider.slick({
        dots: true,
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1
      });
    }
  }
  testimonial_slider();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
