<?php

/** ******** ******** ******** ******** ******** ******** ******** ********
* TITLE: Remove unnecessary meta-data from your WordPress site
* DESCRIPTION: Over the years, wordpress has placed a lot of junk in their system.
* Source: https://gist.github.com/Rhymes2k/d5a40af8892cdcc1b5cd
*/
function remove_header_extra(){
	//Are you editing your WordPress blog using your browser? Then you are not using a blog client
	remove_action('wp_head', 'rsd_link');
	// Windows Live Writer is (it's another blog editing client
	remove_action('wp_head', 'wlwmanifest_link');
	//This announces that you are running WordPress and what version you are using.
	remove_action('wp_head', 'wp_generator');
	//URL shortening is sometimes useful, but this automatic ugly url in your header is useless.
	remove_action('wp_head', 'wp_shortlink_wp_head');
	// Display the links to the general feeds: Post and Comment Feed
	remove_action('wp_head', 'feed_links', 2);
	//// Display the links to the extra feeds such as category feeds
	remove_action('wp_head', 'feed_links_extra', 3);
	//Deprecated
	remove_action('wp_head', 'index_rel_link');
	// start link
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	// prev link
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	// Display relational links for the posts adjacent to the current post.
	remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
}
add_action('init', 'remove_header_extra');

// Add the Advamced Custom Fields settings from file
include 'includes/acf.php';

// Add menus source: https://codex.wordpress.org/Navigation_Menus
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu-left' => __( 'Header Menu L' ),
      'header-menu-right' => __( 'Header Menu R' ),
      'footer-menu-left' => __( 'Footer Menu L' ),
      'footer-menu-right' => __( 'Footer Menu R' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// Add support for Selected image
add_theme_support( 'post-thumbnails' );

// Remove Contact Form 7 class - srouce: https://www.isitwp.com/deregister-contact-form-7-css-style-sheet/
add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
function wps_deregister_styles() {
    wp_deregister_style( 'contact-form-7' );
}

/**
 * Register a custom post type called "module".
 *
 */
function wpdocs_codex_module_init() {
    $labels = array(
        'name'                  => _x( 'Moduler', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Modul', 'Post type singular name', 'textdomain' ),
        'featured_image'        => _x( 'Modulbild', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'moduler' ),
        'capability_type'    => 'page',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
				'menu_icon' 				 => 'dashicons-book'
    );

    register_post_type( 'module', $args );
}
add_action( 'init', 'wpdocs_codex_module_init' );
