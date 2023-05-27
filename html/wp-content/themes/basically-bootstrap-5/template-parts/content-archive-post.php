<?php
/**
* The archive post content template.
*
* @package basically-bootstrap-5
*/
?>

<?php if (have_posts()) { ?>
  <?php
  while (have_posts()) {
    the_post();
    get_template_part('template-parts/content', 'post-teaser');
  }
} else {
  get_template_part('template-parts/content', 'no-results');
}
basically_bootstrap_5_pagination();
?>
