<?php
/**
 * Template part for displaying featured post
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Halasz_Consulting
 */

?>
<section class="section featured-event">
   <h2 class="has-text-centered">Események</h2>
   <div class="container">
      <div class="column">
         <div class="featured-event-card columns">	
            <div class="column is-flex is-justifyend">
               <div class="featured-event-card-img">
                  <img src="<?php the_post_thumbnail(); ?>
               </div>
            </div>
            <div class="column is-flex is-aligncenter is-paddingless is-one-quarter">
               <div class="featured-event-card-content">
                  <div>
                     <span><?php the_date(); ?></span>
                     <h2><?php the_title(); ?></h2>
                     <a href="#" class="simple-link">Részletek</a>
                  </div>
               </div>
            </div>					
         </div>		
      </div>
   </div>
</section>