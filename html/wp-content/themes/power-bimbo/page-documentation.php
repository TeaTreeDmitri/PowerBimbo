<?php
/**
* Template for displaying documentation page
* Template name: Documentationpage
*
* @package powerbimbo
*/
get_header();
?>

<div class="container-fluid px-0">

  <div class="docs-header">
    <?php get_template_part('/template-parts/content-header-documentation');
        ?>
             </div>
             
             <?php get_template_part('/template-parts/content-doc-blocks');
        ?>

            
       
 

</div>

<?php get_footer(); ?>