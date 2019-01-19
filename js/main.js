$(document).ready(function(){
   $('.main-slider-wrap').slick({
      prevArrow: '<button class="slick-prev"><img src="wp-content/themes/zabszolut/assets/images/chevron.svg"></img></button>',
      nextArrow: '<button class="slick-next"><img src="wp-content/themes/zabszolut/assets/images/chevron.svg"></img></button>',
      dots: true,
      autoplay: true,
      fade: true,
      speed: 2000,
      autoplaySpeed: 3000
   });

   $('.testimonials-slider').slick({
      arrows: false,
      autoplay: true,
      speed: 1000
   });
});

// Mobile menu
$(document).ready(function() {
   $(".navbar-burger").click(function() {
         $(".navbar-burger").toggleClass("is-active");
         $(".navbar-menu").slideToggle();

   });

   const windowsize = $(window).width();

   if(windowsize < 1000) {
      $('.has-dropdown .navbar-link').click(function(e) {
         $(this).siblings('.navbar-dropdown').slideToggle();
         e.preventDefault();
      });
   }
   
   $(window).resize(function() {
      if(windowsize < 1000) {
         $('.has-dropdown .navbar-link').click(function(e) {
            $(this).siblings('.navbar-dropdown').slideToggle();
            e.preventDefault();
         });
      }
   });
});

// Animate products & story
$(document).ready(function() {
   $('.product-item-img:odd').addClass('slideInRight');
   $('.product-item-img:even').addClass('slideInLeft');
});

$(document).ready(function($){
   $('img').each(function(){
   $(this).removeAttr('width')
   $(this).removeAttr('height');
  });
});

$(document).ready(function() {
   $('.story-text:even').addClass('slideInRight');
   $('.story-text:odd').addClass('slideInLeft');
});


// Remove inline width & heights
$(document).ready(function($){
   $('img').each(function(){
   $(this).removeAttr('width')
   $(this).removeAttr('height');
  });
});

// Init Wow
new WOW().init();