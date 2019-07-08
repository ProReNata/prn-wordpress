<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage themename
 */


get_header(); ?>

<?php while(have_posts()) : the_post();

$style = "";
if ( has_post_thumbnail() ) {
		$style = sprintf("background-image:url('%s'); text-shadow: 0 0 1.5rem rgba(0,0,0,0.3);", get_the_post_thumbnail_url( null, 'large' ));
}
?>

	<div class="hero" style="<?php echo $style; ?>">
	  <div class="hero-content">
			<h1><?php the_title(); ?></h1>
			<p class="hero-leading"><?php echo $description; ?></p>
		</div>
	</div>

	<article>
		<?php the_content(); ?>
	</article>

<?php endwhile; ?>

<?php get_footer(); ?>
