<?php

function register_my_menus() {
  register_nav_menus(
  array(
   'additional-menu' => __( 'Additional Menu' ),
   'hybrid-menu' => __( 'Hybrid Menu' )
   )
   );
  }
  add_action( 'init', 'register_my_menus' );

function custom_excerpt_length( $length ) {
	return 35;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function mc_child_theme_excerpt_more($more)
{
	return '...';
}

add_filter('excerpt_more', 'mc_child_theme_excerpt_more', 999);

function mc_child_theme_enqueue_script() {
  wp_enqueue_script( 'countup', get_stylesheet_directory_uri() . '/js/countUp.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'waypoints', get_stylesheet_directory_uri() . '/js/waypoints.min.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'mc_child_theme_enqueue_script' );

add_theme_support( 'post-thumbnails' );

?>
