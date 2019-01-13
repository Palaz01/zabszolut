<?php
/* 
	Template Name: Contact Page
*/
get_header(); ?>

<section class="section contact-page">
   <div class="container">
      <div class="columns is-multiline">
         <div class="column is-full-tablet is-half-desktop">
            <div class="form-wrap">
               <h4 class="title is-size-4">Írjon üzenetet!</h4>
               <?php echo do_shortcode('[contact-form-7 id="210" title="kapcsolat"]'); ?>
            </div>            
         </div>
         <div class="column right-column is-full-tablet is-half-desktop">
            <div class="map"></div>
            <div>
               <h4 class="title is-size-4">Elérhetőségeink</h4>
               <p>Proin a orci a turpis hendrerit tempor. Cras at elementum mi, vitae auctor.</p>
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