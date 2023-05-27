<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <div class="entry-content"><?php the_content(); ?></div>
      </div>
    </div>
  </div>
  <footer class="entry-footer">
    <div class="entry-edit-link">
      <?php edit_post_link(__('Edit post', 'basically-bootstrap-5')); ?>
    </div>
  </footer>
</div>
