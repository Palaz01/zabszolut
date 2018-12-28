<?php
/**
 * Template part for displaying single event
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Zabszolut
 */

?>
<section class="section single-content">
   <div class="container">
      <h2 class="has-text-centered"><?php the_title(); ?></h2>
      <hr>
      <span class="has-text-centered"><?php the_date(); ?></span>
      <img src="<?php the_post_thumbnail(); ?>    
      <p><?php the_content(); ?></p>               
   </div>
</section>

<section class="section">
   <div class="container">
      <div class="columns is-flex">
         <?php $the_query = new WP_Query( 'posts_per_page=2' ); ?>
         <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
            <div class="column">
               <div class="event-card columns">	
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
         <?php 
         endwhile;
         wp_reset_postdata();
         ?>
         </div>
         <div class="is-full is-flex is-justifycenter">
            <a href="#" class="button is-primary is-rounded">Vissza az eseményekhez</a>
         </div>
      </div>
   </div>
</section>