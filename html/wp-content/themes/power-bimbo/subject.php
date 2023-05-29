<?php
/**
* The archive template.
* Template name: Subject
*Template Post Type: post, page, event
* @package baselife
*/

get_header();
get_the_title();
?>
<?php get_template_part('/template-parts/content', 'post-subject'); ?>