<?php
/**
* Template for displaying front page
* Template name: Block Demo
*
* @package powerbimbo
*/
get_header();
?>


<?php  



if(have_rows('block')):
    while (have_rows('block')): the_row();

        switch (get_row_layout()) {

            // ************************* TEMPORARY HERO SECTION *****************************

            case "hero_video";


                if(get_sub_field('video')):
                    echo '<div class="heroSectionDraft">';
                        echo '<div class="heroContainer">';
                        echo '<img id="blueRect4" class="videoGraphicLayer" src="/wp-content/themes/power-bimbo/assets/graphics/Rectangle4.svg">';
                        echo '<img id="blueRect3" class="videoGraphicLayer" src="/wp-content/themes/power-bimbo/assets/graphics/Rectangle3.svg">';
                        echo '<img id="blueRect2" class="videoGraphicLayer" src="/wp-content/themes/power-bimbo/assets/graphics/Rectangle2.svg">';
                        echo '<img id="blueRect1" class="videoGraphicLayer" src="/wp-content/themes/power-bimbo/assets/graphics/Rectangle1.svg">';
                        echo '<div class="videoContainer">';
                            echo  '<video loop autoplay muted class="heroVideo">';
                                echo '<source src="' . get_sub_field('video') . ' " type="video/mp4">';
                                echo '</video>';
                            echo '</div>  ';
                        echo  '</div>  ';
                    echo '</div>';

                endif;

            break;
                
                                //*********** Portrait Shape Text Picture Block **********

            case "textpicportrait";

                if(get_sub_field('orientation') === 'left'):
                    $orietntationHorizClass = "leftToRight";
                elseif (get_sub_field('orientation') === 'right'):
                    $orietntationHorizClass = "rightToLeft";
                endif;

                $colour = get_sub_field('colour');
                echo '<div class= "blockContainer">';

                    echo '<div class=" ' . $orietntationHorizClass . ' textPicPortrait ' . $colour . ' ">';

                        echo '<div class="col-6">';
                            echo '<img class="textPicImg "src="' . get_sub_field('image') . ' ">';
                        echo '</div>';
                            
                        echo '<div class=" textPicTextContainer">';
                            echo '<div class="holdLayout">';
                                if(get_sub_field('category')):
                                        echo '<h3 class="' .$colour.' ">';
                                        echo get_sub_field('category');
                                        echo "</h3>";
                                endif;  

                                    if(get_sub_field('title')):
                                    echo "<h2>";
                                    echo get_sub_field('title');
                                    echo "</h2>";
                                endif;

                                if(get_sub_field('text_content')):
                                        echo "<p>";
                                        echo get_sub_field('text_content');
                                        echo "</p>";
                                    endif;  
                                    echo '</div>';

                                    if(get_sub_field('ctacontent')):
                                        echo '<div class="buttonContainer">';
                                            echo "<button class='ctaButton ctaButton$colour'>";
                                                echo get_sub_field('ctacontent');
                                            echo "</button>";
                                        echo '</div>';
                                    endif;
                        echo '</div>';
                    echo '</div>';

                echo '</div>';
            break;

                                //*********** Landscape Shape Text Picture Block **********

            case "textpiclandscape";

                if(get_sub_field('orientation') === 'textTop'):
                    $orietntationVertClass = "topToBottom";
                elseif (get_sub_field('orientation') === 'textBottom'):
                    $orietntationVertClass = "bottomToTop";
                endif;

                echo '<div class= "blockContainer">';

                    echo '<div class=" ' . $orietntationVertClass . ' textPicLandscape">';

                        echo '<div class=" textPicImgLandscape">';
                            echo '<img class=" "src="' . get_sub_field('image') . ' ">';
                        echo '</div>';
                            
                        echo '<div class="textPicTextLandscape">';

                            echo '<div class="holdLayout">';

                                if(get_sub_field('category')):
                                        echo '<h3>';
                                        echo get_sub_field('category');
                                        echo "</h3>";
                                endif;  

                                    if(get_sub_field('title')):
                                    echo "<h2>";
                                    echo get_sub_field('title');
                                    echo "</h2>";
                                endif;

                                if(get_sub_field('text_content')):
                                        echo "<p>";
                                        echo get_sub_field('text_content');
                                        echo "</p>";
                                    endif;  
                            echo '</div>';

                                if(get_sub_field('ctacontent')):
                                    echo '<div class="buttonContainer">';
                                        echo "<button class='ctaButton ctaButton$colour'>";
                                            echo get_sub_field('ctacontent');
                                        echo "</button>";
                                    echo '</div>';
                                endif;

                        echo '</div>';
                    echo '</div>';

                echo '</div>';
            break;

                                    //*********** Full Width Quotes **********

                                    
            case "full_width_quote";

                $colour = get_sub_field('colour');
                    
                echo '<div class= "blockContainer">';
                    
                    echo '<div class="fullWidthQuote ' . $colour . ' ">';

                    echo '<div class="dummyDiv"></div>';

                        echo '<div class="quoteContainer">';

                            if(get_sub_field('main_text')):
                                echo '<h2 class="mainTextQuote">';
                                    echo get_sub_field('main_text');
                                echo '</h2>';
                            endif;

                            if(get_sub_field('quotee')):
                                echo '<p class="quotee"> - ';
                                    echo get_sub_field('quotee');
                                echo '</p>';
                            endif;

                            echo '</div>';
                            
                            if(get_sub_field('ctacontent')):
                                echo "<button class='ctaButton ctaButton$colour'>";
                                    echo get_sub_field('ctacontent');
                                echo "</button>";
                            endif;
                            
                            
                    echo '</div>';
                    
                echo '</div>';

            break;
                                    //*********** Full Width Image **********


            case "full_width_picture";

                echo '<div class="blockContainer">';

                    if(get_sub_field('image')):
                        echo '<div class="fullWidthImageContainer">';
                            echo '<img class="fullWidthImg" src="' . get_sub_field('image') . ' ">';
                        echo '</div>';
                    endif;

                echo '</div>';

            break;

                                    //*********** Static Cards **********

            case "cards_section";

                echo '<div class="blockContainer">';

                        if(get_sub_field('card_section_subtitle')):
                            echo '<h5 class="sectionSubtitle">';
                                echo get_sub_field('card_section_subtitle');
                            echo '</h5>';
                        endif;

                        if(get_sub_field('card_section_title')):
                             echo '<h2 class="sectionTitle">';
                             echo get_sub_field('card_section_title');
                             echo '</h2>';
                        endif;


                        echo '<div class="cardContainer">';

                            if(have_rows('card')):

                                while( have_rows('card')) : the_row();
                                    
                                    if(get_sub_field('card_title')):
                                        echo '<div class="customCard">';

                                            echo '<div class="holdLayout">';

                                                if(get_sub_field('card_image')):
                                                echo '<img src=" '. get_sub_field("card_image") .' ">';
                                                endif;

                                                echo '<h5>';
                                                    echo get_sub_field('card_title');
                                                echo '</h5>';

                                                if(get_sub_field('quotee')):
                                                    echo '<p class="quotee"> - ';
                                                        echo get_sub_field('card_quotee');
                                                    echo '</p>';
                                                endif;

                                                echo '<p>';
                                                    echo get_sub_field('card_content');
                                                echo '</p>';

                                            echo '</div>';

                                            echo '<div class="buttonContainer">';
                                                echo '<button class="ctaButton ctaButtonlightBlue">';
                                                    echo get_sub_field('ctacontent');
                                                echo '</button>';
                                            echo '</div>';


                                        echo '</div>';
                                    endif;
                                
                                endwhile;
                                
                            endif;
                        
                        echo '</div>';
                echo '</div>';


            break;

                                    //*********** Carousel Cards **********
                

            case "carousel_card_section";

                echo '<div class="blockContainer ">';

                    if(get_sub_field('carousel_section_subtitle')):
                        echo '<h5 class="sectionSubtitle">';
                            echo get_sub_field('carousel_section_subtitle');
                        echo '</h5>';
                    endif;

                    if(get_sub_field('carousel_section_title')):
                            echo '<h2 class="sectionTitle">';
                            echo get_sub_field('carousel_section_title');
                            echo '</h2>';
                    endif;

                    echo '<div class="cardContainer gallery-slider">';

                        if(have_rows('carousel_card')):

                            while( have_rows('carousel_card')) : the_row();
                                
                                if(get_sub_field('card_title')):
                                    echo '<div class="customCard">';

                                        echo '<div class="holdLayout">';

                                            echo '<img src=" '. get_sub_field("card_image") .' ">';

                                            echo '<h5>';
                                                echo get_sub_field('card_title');
                                            echo '</h5>';

                                            echo '<p>';
                                                echo get_sub_field('card_content');
                                            echo '</p>';

                                        echo '</div>';

                                        echo '<div class="buttonContainer">';
                                            echo '<button class="simpleCtaButton ctaButtonlightBlue">';
                                                echo get_sub_field('ctacontent');
                                            echo '</button>';
                                        echo '</div>';

                                    echo '</div>';
                                endif;
                            
                            endwhile;
                            
                        endif;

                    echo '</div>';

                echo '</div>';
            break;

                             //*********** Grid List STYLING **********


            case "object_grid";

                echo '<div class="blockContainer">';

                if(get_sub_field('grid_section_subtitle')):
                    echo '<h5 class="sectionSubtitle">';
                        echo get_sub_field('grid_section_subtitle');
                    echo '</h5>';
                endif;

                if(get_sub_field('grid_section_title')):
                    echo '<h2 class="sectionTitle">';
                        echo get_sub_field('grid_section_title');
                    echo '</h2>';
                endif;

                echo '<div class="gridLayout">';

                    if(have_rows('grid_layout')):

                        while( have_rows('grid_layout')) : the_row();

                        echo '<div class="microCard">';

                            echo '<div class="microCardContent">';

                                if(get_sub_field('thumbnail')):
                                    echo '<img class="microCardThumb"src="';
                                        echo get_sub_field('thumbnail');
                                    echo '">';
                                endif;

                                if(get_sub_field('cell_title')):
                                    echo '<p class="cellTitle">';
                                        echo get_sub_field('cell_title');
                                    echo '</p>';
                                endif;
                            
                            echo '</div>';

                            echo '<a href="https://dbc.dk/">';
                                echo '<img class="microCardIcon" src="/wp-content/themes/power-bimbo/assets/graphics/Arrow_R.png">';
                            echo '</a>';

                        echo '</div>';

                        endwhile;

                    endif;

                echo '</div>';

            echo '</div>';

            break;

                             //*********** WYSIWYG STYLING **********

            case "wysiwyg";

            echo '<div class="blockContainer">';

                    if(get_sub_field('flexible_text_content')):

                        echo '<div class="wysiwygContainer">';
                            echo get_sub_field('flexible_text_content');
                        echo '</div>';

                    endif;

            echo '</div';

            break;


        };

    endwhile;

endif;

?>

<?php get_footer(); ?>


