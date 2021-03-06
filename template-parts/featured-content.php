<?php
/**
 * Template part for displaying featured post
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Halasz_Consulting
 */

?>
   
<div class="container">
   <div class="column">
      <div class="featured-card columns is-flex is-alignend">	
         <div class="column is-flex is-justifyend">
            <div class="featured-card-img">
               <img src="<?php the_post_thumbnail(); ?>
            </div>
         </div>
         <div class="column is-flex is-aligncenter">
            <div class="featured-card-content">
               <div>
                  <span><?php the_date(); ?></span>
                  <h2><?php the_title(); ?></h2>
                  <a class="simple-link" href="<?php echo get_permalink(); ?>">Részletek</a>
               </div>
            </div>
         </div>					
      </div>
   </div>		
</div>