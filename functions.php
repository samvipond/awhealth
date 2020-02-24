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

?>
