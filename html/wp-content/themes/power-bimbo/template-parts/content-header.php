<?php
/**
* The theme header page width.
*
* @package powerbimbo
*/
?>

<!-- <header>
    <div class="headerCorporate headerBurger">
        <img class="DBCLogo" src="/wp-content/themes/power-bimbo/assets/graphics/DBC_D1G1TAL_Logo_Blue_RGB_01-20210607-100456.png" alt="DBC logo">
            <a class="headerItem">Header1</a>
            <a class="headerItem">Header2</a>
            <a class="headerItem">Header3</a>
            <a class="headerItem">Header4</a>
            <a class="headerItem">Header5</a>
            <span class="material-symbols-outlined headerItem">search</span>
    </div>
</header> -->

<header class="documantation-header sticky-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-9 col-md-4 style-left left d-flex justify-content-md-start ">
            <?php echo"this is the logo"; ?>
        </div>
        <div class="col-3 col-md-8 right d-flex justify-content-md-end justify-content-center">
            <nav class="navbar navbar-expand-lg navbar-light">
                <?php
                wp_nav_menu( array(
                'theme_location'    => 'header-menu',
                'container_class'   => 'collapse navbar-collapse docs-menu',
                'container_id'      => 'main-menu',
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
                ) );
                ?>
              
               
            </nav>
    </div>
</div>
    </div>
</header>