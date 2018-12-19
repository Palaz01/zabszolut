$(document).ready(function(){
   $('.main-slider-wrap').slick({
      prevArrow: '<button class="slick-prev"><img src="wp-content/themes/zabszolut/assets/images/chevron.svg"></img></button>',
      nextArrow: '<button class="slick-next"><img src="wp-content/themes/zabszolut/assets/images/chevron.svg"></img></button>',
      dots: true,
      autoplay: true,
      fade: true
   });

   $('.testimonials-slider').slick({
      arrows: false,
      autoplay: true
   });
 });