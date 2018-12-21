<?php
/* 
	Template Name: Recipes Page

*/

get_header(); ?>

<section class="recipes section">
   <div class="container">
      <div class="columns is-multiline">
         <?php $loop = new WP_Query( array('post_type' => 'recipe', )); ?>
            <?php if($loop->have_posts()) : ?>
            <?php while($loop->have_posts()) : $loop->the_post() ?>
               <div class="column is-one-third">
                  <div class="card">
                     <div class="card-image">
                        <?php $recipe_img = get_field('recipe_img'); ?>
                        <img src="<?php echo $recipe_img['url']; ?>" alt="<?php echo $recipe_img['alt']; ?>">
                     </div>
                     <div class="card-content">
                        <a href="">
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