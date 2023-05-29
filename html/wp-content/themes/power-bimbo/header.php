<?php
/**
* The theme header.
*
* @package powerbimbo
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div>
        <p>This is the header</p>
</div>
</header>
<body <?php body_class(); ?>>
    <div class="container-fluid page-container d-flex flex-column">
        <?php get_template_part('/template-parts/content-header');
        ?>
        <main>