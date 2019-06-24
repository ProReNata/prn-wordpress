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
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo.svg" />
  </div>
  <div class="pure-u-2-3 l-box">
    <h2><?php bloginfo('description'); ?></h2>
  </div>
</div>

This is the header template (header.php):<br />

<?php wp_nav_menu(); ?>

<hr />
