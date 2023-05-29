<?php
/**
* Template for displaying front page
* Template name: Block Demo
*
* @package powerbimbo
*/
get_header();
?>


<?php  if(have_rows('block')):
    while (have_rows('block')): the_row();

        switch (get_row_layout()) {
                
                                //*********** Portrait Shape Text Picture Block **********

            case "textpicportrait";

                if(get_sub_field('orientation') === 'left'):
                    $orietntationHorizClass = "leftToRight";
                elseif (get_sub_field('orientation') === 'right'):
                    $orietntationHorizClass = "rightToLeft";
                endif;

                $colour = get_sub_field('colour');
                echo '<div class= "blockContainer">';

                    echo '<div class=" ' . $orietntationHorizClass . ' col-10 offset-1 textPicPortrait ' . $colour . ' ">';

                        echo '<div class="col-6">';
                            echo '<img class="textPicImg "src="' . get_sub_field('image') . ' ">';
                        echo '</div>';
                            
                        echo '<div class="col-4 textPicMargins textPicTextContainer">';
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

                                if(get_sub_field('ctacontent')):
                                    echo "<button class='ctaButton ctaButton$colour'>";
                                    echo get_sub_field('ctacontent');
                                    echo "</button>";
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
                            
                        echo '<div class="col-4 textPicTextLandscape">';
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

                                if(get_sub_field('ctacontent')):
                                    echo "<button class='ctaButton ctaButton$colour'>";
                                    echo get_sub_field('ctacontent');
                                    echo "</button>";
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

                                            echo '<img src=" '. get_sub_field("card_image") .' ">';

                                            echo '<h5>';
                                                echo get_sub_field('card_title');
                                            echo '</h5>';

                                            echo '<p class="quotee"> - ';
                                                echo get_sub_field('card_quotee');
                                            echo '</p>';

                                            echo '<p>';
                                                echo get_sub_field('card_content');
                                            echo '</p>';

                        
                                            echo '<button class="cardCTA">';
                                                echo get_sub_field('ctacontent');
                                            echo '</button>';


                                        echo '</div>';
                                    endif;
                                
                                endwhile;
                                
                            endif;
                        
                        echo '</div>';
                echo '</div>';


            break;

                                    //*********** Carousel Cards **********
                

            case "carousel_card_section";

                echo '<div class="blockContainer">';

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

                                            echo '<img src=" '. get_sub_field("card_image") .' ">';

                                            echo '<h5>';
                                                echo get_sub_field('card_title');
                                            echo '</h5>';

                                            echo '<p class="quotee"> - ';
                                                echo get_sub_field('card_quotee');
                                            echo '</p>';

                                            echo '<p>';
                                                echo get_sub_field('card_content');
                                            echo '</p>';

                        
                                            echo '<button class="cardCTA">';
                                                echo get_sub_field('ctacontent');
                                            echo '</button>';


                                        echo '</div>';
                                    endif;
                                
                                endwhile;
                                
                            endif;

                        echo '</div>';


                echo '</div>';
            break;


        };

    endwhile;

endif;

?>

<?php get_footer(); ?>


