<?php
/**
 * The front page template file.
 *
 *
 */
get_header(); ?>

<div class="hero" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/hero.jpg);">
	<h1>Älska ditt journalsystem</h1>
	<p class="hero-leading">Prorenata är Sveriges mest omtycka journalsystem för medicinsk elevhälsa</p>
	<p><a href="#" class="button">Boka en demo</a></p>
</div>

<h3>This is the front page (front-page.php):</h3>

<?php while(have_posts()) : the_post(); ?>

	title: <?php the_title(); ?><br />
	ID: <?php the_ID(); ?><br />
	time: <?php the_time(get_option('date_format')); ?><br />
	excerpt: <?php the_excerpt(); ?><br />
	link: <a href="<?php the_permalink(); ?>">link</a><br />
	content: <?php the_content(); ?><br />
	<hr />

<?php endwhile; ?>

<?php get_footer(); ?>
