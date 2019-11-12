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

<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri()?>/assets/icons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri()?>/assets/icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri()?>/assets/icons/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_template_directory_uri()?>/assets/icons/site.webmanifest">
<link rel="mask-icon" href="<?php echo get_template_directory_uri()?>/assets/icons/safari-pinned-tab.svg" color="#f5a800">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri()?>/assets/icons/favicon.ico">
<meta name="msapplication-TileColor" content="#00303C">
<meta name="msapplication-config" content="<?php echo get_template_directory_uri()?>/assets/icons/browserconfig.xml">
<meta name="theme-color" content="#E5EBEE">

<script src="https://kit.fontawesome.com/89c5779e5f.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
<nav>
  <div class="pure-g">
    <div class="pure-u-3-4 prn-show-md">
      <a class="logo" href="/"><?php bloginfo('name'); ?></a>
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu-left' ) ); ?>
    </div>
    <div class="pure-u-1-4 prn-show-md text-right">
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu-right' ) ); ?>
    </div>

    <div class="prn-hide-md pure-u-1-2">
      <a class="logo" href="/"><?php bloginfo('name'); ?></a>
    </div>
    <div class="prn-hide-md pure-u-1-2 text-right">
      <ul>
        <li><a href="javascript:showMenu()"><i class="fas fa-bars fa-lg"></i></a></li>
      </ul>
    </div>
  </div>
</nav>

<script>
const showMenu = function() {
  document.querySelector('#menu').classList.add('isActive');
  document.querySelector('body').classList.add('drawer-open');
  return false;
}
const hideMenu = function() {
  document.querySelector('#menu').classList.remove('isActive');
  document.querySelector('body').classList.remove('drawer-open');
  return false;
}
</script>

<div class="drawer" id="menu">
  <div class="close" onClick="hideMenu()">
    <i class="fal fa-times fa-fw"></i>
  </div>
  <div class="drawer-content">
    <div class="pure-g">
      <div class="pure-u-1-1 pure-u-sm-3-5 pure-u-md-1-2 l-box pure-center">
        <ul><li><a href="/">Hem</a></li></ul>
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu-left' ) ); ?>
        <ul><li>&mdash;</li></ul>
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu-right' ) ); ?>
      </div>
    </div>
  </div>
</div>

<?php // wp_nav_menu(); ?>
