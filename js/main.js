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

   $('.partner-slider').slick({
      arrows: false,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
         {
            breakpoint: 800,
            settings: {
               slidesToShow: 2,
               slidesToScroll: 2
            }
         },
         {
            breakpoint: 600,
            settings: {
               slidesToShow: 1,
               slidesToScroll: 1
            }
         }
      ]
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

// Animate Story
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