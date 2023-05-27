<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <a href="<?php the_permalink(); ?>" class="post-link">
    <div class="row">
      <div class="col-md-12">
        <h2 class="post-title"><?php the_title(); ?></h2>
        <div class="entry-meta">
          <span class="posted-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
          <span class="post-author"><?php the_author(); ?></span>
        </div>
      </div>
      <?php if ( has_post_thumbnail() ) { ?>
        <div class="col-md-5">
          <div class="featured-image">
            <figure><?php the_post_thumbnail(); ?></figure>
          </div>
        </div>
        <div class="col-md-8">
      <?php } else { ?>
        <div class="col-md-12">
      <?php } ?>
        <?php
          if (get_theme_mod('basically_bootstrap_5_blog_post_length') == 'full') {
            the_content();
          } else {
            the_excerpt();
          }
        ?>
      </div>
    </div>
  </a>
  <?php
  if (comments_open()) {
    echo '<a href="' . get_comments_link() . '" class="comment-link">' . __('Comment on this post', 'basically-bootstrap-5') . '</a>';
  }
  ?>
</article>
