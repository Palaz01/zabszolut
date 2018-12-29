<?php
/* 
	Template Name: Contact Page
*/
get_header(); ?>

<section class="section contact-page">
   <div class="container">
      <div class="columns">
         <div class="column">
         </div>
         <div class="column">
            <p>Hun-Trade Kft</p>
            <p><?php the_field('adress'); ?></p>
            <p><?php the_field('phone'); ?></p>
            <p><?php the_field('email'); ?></p>
         </div>
      </div>

      <?php echo do_shortcode('[contact-form-7 id="210" title="kapcsolat"]'); ?>
   </div>
</section>
<?php get_footer(); ?>