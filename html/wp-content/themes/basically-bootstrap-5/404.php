<?php
/**
* Page not found template file.
*
* @package basically-bootstrap-5
*/

get_header();

?>

  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <section class="error-404 not-found">
            <header class="page-header">
              <h1 class="entry-title"><?php _e('Sorry! the page you are looking for can&rsquo;t be found.', 'basically-bootstrap-5'); ?></h1>
            </header>
            <div class="content">
              <?php
              if ( is_active_sidebar( 'basically-bootstrap-5-404-widget' ) ) :
                dynamic_sidebar( 'basically-bootstrap-5-404-widget' );
              endif;
              ?>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
