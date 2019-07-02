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

<?php while(have_posts()) : the_post(); ?>

	<div class="pure-g">
		<div class="pure-u-1-1">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>

	<?php the_content(); ?>

<?php endwhile; ?>

<?php get_footer(); ?>
