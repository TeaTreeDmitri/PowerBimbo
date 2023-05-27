<?php
/**
* Functions file.
*
* @package basically-bootstrap-5
*/

/* Theme support */
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

add_action(
  'after_setup_theme',
  function() {
    add_theme_support( 'html5', [ 'script', 'style' ]);
  }
);

/* Layout */
$header = get_theme_mod( 'basically_bootstrap_5_header_width' );
if ($header == '') {
  $header == 'page';
}
define("HEADER", $header);

// Customizer additions.
require_once get_template_directory() . '/inc/customizer.php';
// Bootstrap pagination
require_once get_template_directory() . '/inc/pagination.php';
// Register Custom Navigation Walker
function register_navwalker(){
  require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function basically_bootstrap_5_enqueue_style() {
  wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
  if (get_theme_mod( 'basically_bootstrap_5_use_slick_slider' )) {
    wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/css/slick.css' );
  }
  if (get_theme_mod( 'basically_bootstrap_5_use_slick_slider_lightbox' )) {
    wp_enqueue_style( 'slick-lightbox-css', get_template_directory_uri() . '/assets/css/slick-lightbox.css' );
  }
  if ( is_child_theme() ) {
    wp_enqueue_style( 'parent-stylesheet', trailingslashit( get_template_directory_uri() ) . 'style.css', false );
  }
  wp_enqueue_style( 'theme-stylesheet', get_stylesheet_uri(), array(), filemtime( get_stylesheet_directory() . '/style.css' ) );
}
add_action( 'wp_enqueue_scripts', 'basically_bootstrap_5_enqueue_style' );

function basically_bootstrap_5_enqueue_scripts() {
  global $wp_scripts;
  wp_enqueue_script( 'popper_js', get_template_directory_uri() . '/assets/js/popper.min.js', array(), null, true );
  wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), null, true );
  if (get_theme_mod( 'basically_bootstrap_5_use_slick_slider' )) {
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), null, true );
  }
  if (get_theme_mod( 'basically_bootstrap_5_use_slick_slider_lightbox' )) {
    wp_enqueue_script( 'slick-lightbox', get_template_directory_uri() . '/assets/js/slick-lightbox.min.js', array('jquery'), null, true );
  }
  if (get_theme_mod( 'basically_bootstrap_5_use_lottie_animations' )) {
    wp_enqueue_script( 'lottie-player', get_template_directory_uri() . '/assets/js/lottie-player.js', array(), null, true );
  }
  if (is_singular() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}
add_action( 'wp_enqueue_scripts', 'basically_bootstrap_5_enqueue_scripts');

add_action(
    'after_setup_theme',
    function() {
        add_theme_support( 'html5', [ 'script', 'style' ] );
    }
);

// Register Menu Area
function basically_bootstrap_5_register_menu() {
  register_nav_menu('header-menu',__( 'Header Menu', 'basically-bootstrap-5' ));
}
add_action( 'init', 'basically_bootstrap_5_register_menu' );

// Register widget area.
function basically_bootstrap_5_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Page not found', 'basically-bootstrap-5' ),
    'id'            => 'basically-bootstrap-5-404-widget',
    'description'   => '',
    'before_widget' => '<div id="505-%1$s" class="page-not-found-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ));
}
add_action( 'widgets_init', 'basically_bootstrap_5_widgets_init' );

// Add json (for Lottie Animations) and svg
function basically_bootstrap_5_mime_types($mimes) {
  $mimes['json'] = 'text/plain';
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'basically_bootstrap_5_mime_types');

// Remove Gutenberg Block Library CSS from loading on the frontend
function basically_bootstrap_5_remove_wp_block_library_css(){
  wp_dequeue_style( 'wp-block-library' );
  wp_dequeue_style( 'wp-block-library-theme' );
  wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
}
add_action( 'wp_enqueue_scripts', 'basically_bootstrap_5_remove_wp_block_library_css', 100 );

?>
