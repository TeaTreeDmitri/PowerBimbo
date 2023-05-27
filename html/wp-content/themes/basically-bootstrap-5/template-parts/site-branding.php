<?php
/**
* The theme site branding.
*
* @package basically-bootstrap-5
*/

if ( has_custom_logo() ) {
	the_custom_logo();
} else { ?>
  <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
<?php } ?>
