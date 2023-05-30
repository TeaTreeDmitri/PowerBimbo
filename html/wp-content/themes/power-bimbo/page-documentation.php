<?php
/**
* Template for displaying documentation page
* Template name: Documentationpage
*
* @package powerbimbo
*/
get_header();
?>

<div class="container-fluid px-0">

  <div class="docs-header">
    <?php get_template_part('/template-parts/content-header-documentation');
        ?>
             </div>
             
             <?php get_template_part('/template-parts/content-doc-blocks');
        ?>

       <?php
    $args = array(
      'post_type' => 'subject',
      'posts_per_page' => -1 // Retrieve all subject posts
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
      while ($query->have_posts()) {
        $query->the_post();
        get_template_part('template-parts/content', 'subject');
      }
      wp_reset_postdata();
    } else {
      // No subject posts found
    }
  ?>

</div>