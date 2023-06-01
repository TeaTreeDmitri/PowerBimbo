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
    <link rel="stylesheet" href="/wp-content/themes/power-bimbo/style2.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>




    <div class="container-fluid page-container d-flex flex-column ">
        <?php get_template_part('/template-parts/content-header');
        ?>
        <main>