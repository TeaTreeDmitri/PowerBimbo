<?php
/**
* The theme header page width.
*
* @package powerbimbo
*/
?>
<header class="sticky-top ">
   

    
        <div class="logoWrapper ">
            <a class="logoLink" href="https://powerbimbo.demo.supertusch.com/documentation-site/" >
            <img class="DBCLogoBlue" src="/wp-content/themes/power-bimbo/assets/graphics/DBC_D1G1TAL_Logo_Blue_RGB_01-20210607-100456.png" alt="DBC logo">
            </a>
            
        </div>
      
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

 
</header>