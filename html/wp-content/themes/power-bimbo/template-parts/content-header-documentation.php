<?php
/**
* The theme header-documentation page width.
*
* @package bootstrap-basic-5
*/
?>

<div class="documantation-header sticky-top">
 <div class="">
        <div class="topHeader">
            <div class="logoWrapper ">
            <a class="logoLink" href="https://powerbimbo.demo.supertusch.com/documentation-site/" >
            <img class="DBCLogoBlue" src="/wp-content/themes/power-bimbo/assets/graphics/DBC_D1G1TAL_Logo_Blue_RGB_01-20210607-100456.png" alt="DBC logo">
            </a>
            </div>

         
                <nav class="">
                        <?php
                        wp_nav_menu( array(
                        'theme_location'    => 'docs',
                        'container_class'   => 'collapse navbar-collapse docs-menu',
                        'container_id'      => '-menu',
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                        ) );
                        ?>
                </nav>
        

        </div>

        <div class="search-bar">
            <span class="material-symbols-outlined">search</span> 
            <form id="searchForm" action="" method="get">
                <div class= "inputAndReuslts">
                <input type="text" id="searchInput" name="search" placeholder="Search Documentation_" />
                <ul id="searchResults"></ul>
                        </div>
                <button type="submit" id="searchButton" class="btn btn-primary">Search</button>
            </form>
        </div>
   
       
              



      
        
 </div>
</div>