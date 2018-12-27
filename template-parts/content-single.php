<?php
/**
 * Template part for displaying single event
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Halasz_Consulting
 */

?>
<section class="section single-event">
   <div class="container">
      <h2 class="has-text-centered"><?php the_title(); ?></h2>
      <hr>
      <span class="has-text-centered"><?php the_date(); ?></span>
      <img src="<?php the_post_thumbnail(); ?>      
      <p><?php the_content(); ?></p>               
   </div>
</section>