<?php
/**
* The theme header.
*
* @package basically-bootstrap-5
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="container-fluid page-container d-flex flex-column">
		<?php
		if (HEADER == 'page') {
			get_template_part('/template-parts/header-page-width');
		} else {
			get_template_part('/template-parts/header-full-width');
		}
		?>
    <main>
