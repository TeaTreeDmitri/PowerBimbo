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



            };

    endwhile;

endif;

?>



