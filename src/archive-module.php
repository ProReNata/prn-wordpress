<?php
/**
 * The Template for displaying all modules.
 *
 */
 get_header();

 $wp_all_query = new WP_Query(array('post_type'=>'module', 'post_status'=>'publish', 'posts_per_page'=>-1, 'orderby'=>'title', 'order'=>'ASC')); ?>

  	<div class="page-header bg-s700">
  	  <div class="page-header-content">
        <h1 class="text-center">Funktioner i Prorenata Journal</h1>
      </div>
    </div>

    <article>
      <p class="leading text-center">Här är ett urval av alla de funktioner som Prorenata Journal har att erbjuda.</p>
    </article>

 <div class="module-card-wrapper">
 <?php while($wp_all_query->have_posts()) : $wp_all_query->the_post();?>
   <div class="module-card">

       <i class="fad <?php the_field('icon'); ?> fa-2x"></i>
       <h4><?php the_title(); ?></h4>
       <div class="text-small"><?php the_content(); ?></div>
       <?php if (get_field('link')) { ?>
         <div class="module-card-more-info"><a href="<?php the_field('link'); ?>">Fördjupad information -></a></div>
       <?php } ?>

   </div>
 <?php endwhile; ?>
</div>

 <?php get_footer(); ?>
