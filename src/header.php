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
