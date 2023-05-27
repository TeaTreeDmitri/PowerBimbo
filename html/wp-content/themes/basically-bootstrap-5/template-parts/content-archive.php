<?php
/**
* The archive content template.
*
* @package basically-bootstrap-5
*/
?>

<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <header class="entry-header">
          <?php
          the_archive_title('<h1 class="entry-title">', '</h1>');
          the_archive_description('<div class="taxonomy-description">', '</div>');
          ?>
        </header>
        <?php get_template_part('/template-parts/content', 'archive-post'); ?>
      </div>
    </div>
  </div>
</div>
