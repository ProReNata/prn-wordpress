<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
 get_header(); ?>

 <?php while(have_posts()) : the_post();

 $style = "";
 if ( has_post_thumbnail() ) {
 		$style = sprintf("background-image:url('%s'); text-shadow: 0 0 1.5rem rgba(0,0,0,0.3);", get_the_post_thumbnail_url( null, 'large' ));
 }
 ?>

 	<div class="page-header" style="<?php echo $style; ?>">
 	  <div class="page-header-content">
 			<h1><?php the_title(); ?></h1>
 			<p class="hero-leading"><?php echo $description; ?></p>
 		</div>
 	</div>

 	<article>
 		<?php the_content(); ?>
 	</article>

 <?php endwhile; ?>

 <?php get_footer(); ?>
