<?php
/* 
	Template Name: Recipes Page

*/

get_header(); ?>

<section class="section recipes-page-content">
   <h2 class="has-text-centered main-title">Receptek</h2>
   <div class="featured-recipe">
      <?php
      if ( have_posts() ) :
         query_posts('post_type=recipe&featured=yes');
         /* Start the Loop */
         while ( have_posts() ) :
            the_post();

            /*
            * Include the Post-Type-specific template for the content.
            * If you want to override this in a child theme, then include a file
            * called content-___.php (where ___ is the Post Type name) and that will be used instead.
            */
            get_template_part( 'template-parts/featured-recipe', get_post_type() );

         endwhile;
         wp_reset_query();
         the_posts_navigation();

      else :
         get_template_part( 'template-parts/content', 'none' );
      endif;
      ?>
   </div>

   <div class="container">
      <div class="columns is-multiline">
         <?php $loop = new WP_Query( array('post_type' => 'recipe', )); ?>
            <?php if($loop->have_posts()) : ?>
            <?php while($loop->have_posts()) : $loop->the_post() ?>
               <div class="column is-one-third">
                  <div class="recipe-list-item">                  
                     <?php $recipe_img = get_field('recipe_img'); ?>
                     <img class="recipe-list-item-img" src="<?php echo $recipe_img['url']; ?>" alt="<?php echo $recipe_img['alt']; ?>">
                     <div class="recipe-list-item-content">
                        <?php if( get_field('preparation_time') ): ?>
                           <div class="prep-time">
                              <img src="<?php bloginfo('template_directory'); ?>/assets/images/clock.svg" alt="clock">
                              <span><?php the_field('preparation_time'); ?></span>
                           </div>
                        <?php endif; ?>
                        <a href="<?php echo get_permalink(); ?>">
                           <h4 class="title is-size-4"><?php the_title(); ?></h4>
                        </a>
                     </div>
                  </div>               
               </div>
            <?php endwhile; ?>
            <?php endif; ?>
         <?php wp_reset_query(); ?>   
      </div>
   </div>
</section>

<?php get_footer(); ?>