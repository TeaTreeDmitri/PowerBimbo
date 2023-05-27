<div class="container">
  <div class="row">
    <div class="col-12">
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
          <h1 class="entry-title"><?php the_title(); ?></h1>
          <div class="entry-meta">
            <div class="posted-date"><?php the_time( get_option( 'date_format' ) ); ?></div>
            <div class="post-author"><?php the_author(); ?></div>
          </div>
        </header>
        <div class="content">
          <div class="featured-image">
            <figure><?php the_post_thumbnail(); ?></figure>
          </div>
          <div class="entry-content"><?php the_content(); ?></div>
          <?php if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif; ?>
          <footer class="entry-meta">
            <div class="entry-meta-categories">
              <?php $categories_list = get_the_category_list(__(', ', 'basically-bootstrap-5'));
              if (!empty($categories_list)) { ?>
                <div class="categories">
                  <?php echo '<span class="category-label">' . __('Categories: ', 'basically-bootstrap-5') . '</span>' . $categories_list; ?>
                </div>
              <?php }  ?>
            </div>
            <div class="entry-meta-tags">
              <?php $tags_list = get_the_tag_list('', __(', ', 'basically-bootstrap-5'));
              if (!empty($tags_list)) { ?>
                <div class="tags">
                  <?php echo '<span class="tag-label">' . __('Tags: ', 'basically-bootstrap-5') . '</span>' . $tags_list; ?>
                </div>
              <?php }  ?>
            </div>
            <div class="post-navigation row hidden-print">
              <div class="previous-post col-6"><?php previous_post_link('%link'); ?></div>
              <div class="next-post col-6 d-flex justify-content-end"><?php next_post_link('%link'); ?></div>
            </div>
            <div class="entry-edit-link">
              <?php edit_post_link(__('Edit post', 'basically-bootstrap-5')); ?>
            </div>
          </footer>
        </div>
      </article>
    </div>
  </div>
</div>
