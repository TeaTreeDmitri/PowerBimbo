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

//include secondary CSS for multiplayer working
function custom_style_sheet() {
    wp_enqueue_style( 'custom-styling', get_stylesheet_directory_uri() . '/style2.css' );
    }
    add_action('wp_enqueue_scripts', 'custom_style_sheet');