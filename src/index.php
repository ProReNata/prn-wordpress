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

  	<div class="page-header" style="<?php echo $style; ?>">
  	  <div class="page-header-content">
  			<h1>Senaste nytt</h1>
  			<p class="hero-leading"><?php echo $description; ?></p>
  		</div>
  	</div>

 <?php while(have_posts()) : the_post();

 $style = "";
 if ( has_post_thumbnail() ) {
 		$style = sprintf("background-image:url('%s'); text-shadow: 0 0 1.5rem rgba(0,0,0,0.3);", get_the_post_thumbnail_url( null, 'large' ));
 }
 ?>

 	<article>
    <h2><?php the_title(); ?></h2>
    <p class="text-small text-muted"><?php the_date(); ?></p>
 		<?php the_content(); ?>
    <hr class="post-divider" />
 	</article>

 <?php endwhile; ?>

 <div class="post-nav-container">
   <div class="post-nav-link"><?php next_posts_link('<i class="far fa-arrow-left"></i> Äldre inlägg'); ?></div>
   <div class="post-nav-link"><?php previous_posts_link( 'Nyare inlägg <i class="far fa-arrow-right"></i>' ); ?></div>
 </div>

 <?php get_footer(); ?>
