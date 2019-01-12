<?php
/* 
	Template Name: Contact Page
*/
get_header(); ?>

<section class="section contact-page">
   <div class="container">
      <div class="columns">
         <div class="column">
            <div class="form-wrap">
               <?php echo do_shortcode('[contact-form-7 id="210" title="kapcsolat"]'); ?>
            </div>            
         </div>
         <div class="column">
            <div class="map"></div>
            <div>
               <p class="is-flex is-aligncenter"> 
                  <span>
                     <img src="<?php bloginfo('template_directory'); ?>/assets/images/marker.png" alt="marker">
                  </span> 
                  <strong>Hun-Trade Kft</strong> <?php the_field('adress'); ?>
               </p>
               <p class="is-flex is-aligncenter">
                  <span>
                     <img src="<?php bloginfo('template_directory'); ?>/assets/images/phone.png" alt="marker">
                  </span> 
                  <?php the_field('phone'); ?>
               </p>
               <p class="is-flex is-aligncenter">
                  <span>
                     <img src="<?php bloginfo('template_directory'); ?>/assets/images/envelope.png" alt="marker">
                  </span> 
                  <?php the_field('email'); ?>
               </p>
            </div>            
         </div>
      </div>      
   </div>
</section>
<?php get_footer(); ?>