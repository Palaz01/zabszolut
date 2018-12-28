<?php
/**
 * Template part for displaying single recipe
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Halasz_Consulting
 */

?>
<section class="section single-recipe single-content">
   <div class="container">
      <h2 class="has-text-centered"><?php the_title(); ?></h2>
      <hr>
      <span class="has-text-centered"><?php the_date(); ?></span>
      <div>
         <img src="<?php the_post_thumbnail(); ?>" >
         <h4 class="title is-size-4"><?php the_title(); ?></h4>
         <p><?php the_content(); ?></p> 
      </div>
      <h4 class="title is-size-4"><?php the_field('preparation_title'); ?></h4>
      <p><?php the_field('preparation_text'); ?></p>            
   </div>
</section>