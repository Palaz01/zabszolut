<?php
/* 
	Template Name: Informative Page

*/

get_header(); ?>

<section class="section">
   <div class="container">
      <h2 class="has-text-centered"><?php the_title(); ?></h2>
      <?php while(have_posts()) : the_post(); ?>
         <?php the_content();?>
      <?php endwhile; ?>
   </div>
</section>

<?php get_footer(); ?>