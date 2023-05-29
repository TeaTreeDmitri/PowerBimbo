<?php 

function omnidocs_enqueue_scripts() {
  wp_enqueue_script( 'omnidocs-jquery', get_stylesheet_directory_uri() . '/assets/js/jquery.main.js', array('jquery')); //
}
add_action( 'wp_enqueue_scripts', 'omnidocs_enqueue_scripts' );

// Include custom post types
require_once('inc/custom-content-types.php');

//docs header

register_nav_menus( array(
  'docs' => __( 'Documentation Menu', 'generatepress' ),
  

) );

