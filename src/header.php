<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<?php wp_head(); ?>
</head>

<body>
<div class="pure-g">
  <div class="pure-u-3-4 l-box">
    <h3 class="logo"><?php bloginfo('name'); ?></h3>
    Meny Meny Meny
  </div>
  <div class="pure-u-1-4 l-box">
    Menu
  </div>
</div>

This is the header template <span class="logo logo-dark">Prorenata</span> (header.php):<br />

<?php wp_nav_menu(); ?>

<hr />
