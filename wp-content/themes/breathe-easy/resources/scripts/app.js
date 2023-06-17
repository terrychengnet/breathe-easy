import domReady from '@roots/sage/client/dom-ready';

// Slick slider
import 'slick-carousel/slick/slick.min.js';

// Alpine
import {
  Collapse,
  initTE,
} from "tw-elements";

//GSAP
import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger.js";

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

  let heroMoreBtn = function() {
    const heroBtn = $('#hero-read-more');
    if (heroBtn.length > 0) {
      heroBtn.on('click', function(){
        console.log('go');
        const tar = $('section');
        $('html, body').animate({
          scrollTop: $(".home-hero").next(tar).offset().top - 85
       }, 1000);
      })
    }
  }
  heroMoreBtn();

  // Timeline
  let timeline = function() {
    var items = $(".timeline-dot"),
    timelineHeight = $(".timeline ul").height(),
    greyLine = $('.default-line'),
    lineToDraw = $('.draw-line');

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

  // Testimonial Module
  let testimonial_slider_module  = function() {
    let slider = $('.testimonial-slider');
      if (slider.length > 0) {
        slider.slick({
        dots: true,
        arrows: true,
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              arrows: false,
            }
          }
        ]
      });
    }
  }
  testimonial_slider_module();

  // FAQ Module
  let faqModule_module = function() {
    let faq = $('.section-faq');
    if (faq.length > 0) {
      initTE({ Collapse });
    }
  }
  faqModule_module();

  // GSAP registration
  gsap.registerPlugin(ScrollTrigger);
  
  // Hero animation
  let hero_animation = function() {
    if ($('.home-hero').length > 0) {
      gsap.to(".hero-pre-txt", {
        y: -40,
        opacity: 1,
        duration: 0.7,
        delay: 0.3,
        scrollTrigger: { trigger: ".hero", start: "top center" }
      });
      gsap.to(".hero-title", {
        y: -40,
        opacity: 1,
        duration: 0.7,
        delay: 0.6,
        scrollTrigger: { trigger: ".hero", start: "top center" }
      });
      gsap.to(".hero-content", {
        scrollTrigger: {
          scrub: true
        }, 
        y: (i, target) => -ScrollTrigger.maxScroll(window) * target.dataset.speed,
        ease: "none"
      });
    }
  }
  hero_animation();

  //Timeline Animation
  let timeline_animation = function() {
    if ($('.section-timeline').length > 0) {
      const t_items = gsap.utils.toArray(".timeline__item");

      t_items.forEach((t_item, i) => {
        const t_item_card = t_item.querySelector(".timeline__img-shade");
        const t_item_num = t_item.querySelector(".timeline__num");

        gsap.from(t_item_card, {
          yPercent: 20,
          duration: 0.9,
          ease: "power2.inOut",
          scrollTrigger: { trigger: t_item, scrub: true }
        });

        gsap.to(t_item_num, {
          opacity: 1,
          scrollTrigger: { trigger: t_item, start: "top center" }
        });
      });
    }
  }
  timeline_animation();

});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
