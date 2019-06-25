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
<nav class="pure-g">
  <div class="pure-u-3-4">
    <h3 class="logo"><?php bloginfo('name'); ?></h3>
    <ul>
      <li>Moduler</li>
      <li>Utbildningar</li>
      <li>Pris</li>
      <li>Om oss</li>
      <li>Jobb</li>
    </ul>
  </div>
  <div class="pure-u-1-4 text-right">
    <ul>
      <li>Support</li>
      <li>Logga in</li>
    </ul>
  </div>
</nav>

<?php // wp_nav_menu(); ?>

<hr />
