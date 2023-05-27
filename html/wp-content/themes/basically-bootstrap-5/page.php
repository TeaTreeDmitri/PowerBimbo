<?php
/**
* Default page
*
* @package basically-bootstrap-5
*/

get_header();

?>
  <div class="main-content-default">
    <?php
      while (have_posts()) {
        the_post();

        get_template_part('/template-parts/content', 'page');

      } //endwhile;
    ?>
  </div>
<?php get_footer(); ?>
