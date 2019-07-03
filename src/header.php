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
<script src="https://kit.fontawesome.com/89c5779e5f.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<?php wp_head(); ?>
</head>

<body>
<nav>
  <div class="pure-g">
    <div class="pure-u-3-4">
      <a class="logo" href="/"><?php bloginfo('name'); ?></a>
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu-left' ) ); ?>
    </div>
    <div class="pure-u-1-4 text-right">
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu-right' ) ); ?>
    </div>
  </div>
</nav>

<?php // wp_nav_menu(); ?>
