import domReady from '@roots/sage/client/dom-ready';

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
      $('.header').toggleClass('filled');
      $('.mobile-menu').slideToggle(100);
    });
  }
  hamburgerBtn();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
