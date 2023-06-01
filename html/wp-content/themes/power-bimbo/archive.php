<?php
/**
* The archive content template.
* Template Name: Archive
*
* @package powerbimbo
*/

get_header();
?>

<div class="container">
  <h2>News Archive</h2>
  <ul class="post-list">
    <?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => -1, // Retrieve all posts
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
      while ($query->have_posts()) :
        $query->the_post();
    ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php
      endwhile;
      wp_reset_postdata(); // Reset the post data
    else :
      echo '<li>No posts found.</li>';
    endif;
    ?>
  </ul>
</div>

<?php get_footer(); ?>
