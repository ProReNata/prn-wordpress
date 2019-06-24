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
  <div class="pure-u-1-3 l-box">
    <h3 class="logo logo-a500"><?php bloginfo('name'); ?></h3>
    <h3 class="logo logo-p500"><?php bloginfo('name'); ?></h3>
    <h3 class="logo"><?php bloginfo('name'); ?></h3>
  </div>
  <div class="pure-u-2-3 l-box">
    <h2><?php bloginfo('description'); ?></h2>
  </div>
</div>

This is the header template (header.php):<br />

<?php wp_nav_menu(); ?>

<hr />
