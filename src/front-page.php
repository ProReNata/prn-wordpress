<?php
/**
 * The front page template file.
 *
 *
 */
get_header(); ?>

<div class="hero" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/hero.jpg);">
	<div class="hero-content">
		<h1>Älska ditt journalsystem</h1>
		<p class="hero-leading">Prorenata är Sveriges mest omtycka journalsystem för medicinsk elevhälsa</p>
		<p><a href="#" class="btn btn-primary">Boka en demo</a></p>
	</div>
</div>

<div class="quote">
	<blockquote>”I mitt arbete som läkare har jag upplevt ett stort behov av ett enkelt, lättöverskådligt dokumentationssystem. Därför har vi skapat Prorenata Journal.”</blockquote>
	<p class="quotee">Jens Alm, Grundare och VD <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/jens.jpg" class="quotee-img" /> Läs hela brevet från Jens -></p>
</div>



<div class="section">
	<p class="leading">Prorenata Journal är ett webbaserat dokumentationssystem med användarvänlig utformning framtaget för att passa alla verksamheter med behov av att föra journal på ett snabbt och säkert sätt.</p>
</div>

<?php get_footer(); ?>
