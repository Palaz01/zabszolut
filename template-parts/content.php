<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Halasz_Consulting
 */

?>
<div class="column is-full-tablet is-half-desktop">
   <div class="event-card">
      <div class="columns">      	
         <div class="column is-flex is-justifycenter">
            <div class="event-card-img">
               <img src="<?php the_post_thumbnail(); ?>
            </div>
         </div>
         <div class="column is-flex is-aligncenter is-paddingless is-three-fifths">
            <div class="card-content">
               <div>
                  <span><?php the_date(); ?></span>
                  <h4 class="title is-size-4"><?php the_title(); ?></h4>
               </div>
               <p><?php echo get_excerpt(); ?></p>
            </div>
         </div>
      </div>					
   </div>		
</div>