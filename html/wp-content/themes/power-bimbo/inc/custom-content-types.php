<?php

/* powerbimbo custom content types */


function powerbimbo_register_custom_content_type_init() {

    $subject_labels = array(
      'name'               => __( 'Subjects', 'powerbimbo-admin'),
      'singular_name'      => __( 'Subject', 'powerbimbo-admin'),
      'menu_name'          => __( 'Subjects', 'powerbimbo-admin')
    );
  
    $subject_args = array(
      'labels'             => $subject_labels,
      'public'             => true,
      'capability_type'    => 'post',
      'has_archive'        => true,
      'rewrite' => array('slug' => 'subjects', 'with_front' => false),
      'supports'           => array( 'title', 'editor', 'thumbnail' ),
          'menu_icon'   => 'dashicons-businessperson',
    );
    register_post_type('subject', $subject_args);

}

add_action('init', 'powerbimbo_register_custom_content_type_init');




?>