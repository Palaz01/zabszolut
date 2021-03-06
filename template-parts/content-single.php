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
      <h1 class="has-text-centered"><?php the_title(); ?></h1>
      <hr>
      <span class="has-text-centered"><?php the_date(); ?></span>
      <img src="<?php the_post_thumbnail(); ?>    
      <p><?php the_content(); ?></p>               
   </div>
</section>

<section class="section events">
   <div class="container">
      <div class="columns is-multiline post-list events-list">
         <?php $the_query = new WP_Query( 'posts_per_page=2' ); ?>
         <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
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