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

?>
