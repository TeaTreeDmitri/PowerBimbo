<?php get_template_part('/template-parts/site-branding'); ?>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<?php
wp_nav_menu( array(
  'theme_location'    => 'header-menu',
  'container_class'   => 'collapse navbar-collapse',
  'container_id'      => 'main-menu',
  'menu_class' => '',
  'fallback_cb' => '__return_false',
  'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
  'depth' => 2,
  'walker' => new bootstrap_5_wp_nav_menu_walker()
) );
?>
