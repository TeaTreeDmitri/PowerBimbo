<?php
/**
* The single post
*
* @package basically-bootstrap-5
*/

get_header();

?>
  <div class="main-content-default">
    <?php
      while (have_posts()) {
        the_post();

        get_template_part('/template-parts/content', 'post');

      } //endwhile;
    ?>
  </div>
<?php get_footer(); ?>
