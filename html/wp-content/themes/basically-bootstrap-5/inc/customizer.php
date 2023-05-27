<?php
/**
* Basically Theme Customizer
*
* @package basically-bootstrap-5
*/

// Add customizer
function basically_bootstrap_5_customize_register( $wp_customize ) {

  /* Customize Header */
  $wp_customize->add_section( 'basically_bootstrap_5_header' , array(
    'title'      => __( 'Header', 'basically-bootstrap-4' ),
    'priority'   => 20,
  ) );
  $wp_customize->add_setting( 'basically_bootstrap_5_header_width' , array(
    'default'     => 'page',
    'transport'   => 'refresh',
    'sanitize_callback' => 'basically_bootstrap_5_sanitize_select'
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'basically_bootstrap_5_header_width', array(
    'label'    => __( 'Header Background Width', 'basically-bootstrap-4' ),
    'type'     => 'radio',
    'choices'  => array(
      'page' => __( 'Page content width', 'basically-bootstrap-5' ),
      'full'  => __( 'Full width', 'basically-bootstrap-5' ),
    ),
    'section'  => 'basically_bootstrap_5_header',
    'settings' => 'basically_bootstrap_5_header_width',
  ) ) );

  /* Customize slick slider */
  $wp_customize->add_section( 'basically_bootstrap_5_slick_slider' , array(
    'title'      => __( 'Slick slider', 'basically-bootstrap-5' ),
    'priority'   => 50,
  ) );
  $wp_customize->add_setting( 'basically_bootstrap_5_use_slick_slider' , array(
    'default'     => false,
    'transport'   => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'basically_bootstrap_5_use_slick_slider', array(
    'label'    => __( 'Enable Slick Slider', 'basically-bootstrap-5' ),
    'type'     => 'checkbox',
    'section'  => 'basically_bootstrap_5_slick_slider',
    'settings' => 'basically_bootstrap_5_use_slick_slider',
  ) ) );
  $wp_customize->add_setting( 'basically_bootstrap_5_use_slick_slider_lightbox' , array(
    'default'     => false,
    'transport'   => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'basically_bootstrap_5_use_slick_slider_lightbox', array(
    'label'    => __( 'Enable Slick Slider Lightbox', 'basically-bootstrap-5' ),
    'type'     => 'checkbox',
    'section'  => 'basically_bootstrap_5_slick_slider',
    'settings' => 'basically_bootstrap_5_use_slick_slider_lightbox',
  ) ) );

  /* Customize Lottie Animations */
  $wp_customize->add_section( 'basically_bootstrap_5_lottie_animations' , array(
    'title'      => __( 'Lottie Animations', 'basically-bootstrap-5' ),
    'priority'   => 60,
  ) );
  $wp_customize->add_setting( 'basically_bootstrap_5_use_lottie_animations' , array(
    'default'     => false,
    'transport'   => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'basically_bootstrap_5_use_lottie_animations', array(
    'label'    => __( 'Enable Lottie Animations', 'basically-bootstrap-5' ),
    'type'     => 'checkbox',
    'section'  => 'basically_bootstrap_5_lottie_animations',
    'settings' => 'basically_bootstrap_5_use_lottie_animations',
  ) ) );

}
add_action( 'customize_register', 'basically_bootstrap_5_customize_register' );

/* Sanitization Callbacks */

/* Selects */
function basically_bootstrap_5_sanitize_select( $input, $setting ) {
	$input = sanitize_key( $input );
	$choices = $setting->manager->get_control( $setting->id )->choices;
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

?>
