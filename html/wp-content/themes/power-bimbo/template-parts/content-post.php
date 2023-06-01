<?php


// heading section

echo '<div class="blockContainer">';

    echo '<h5 class="sectionSubtitle"> The latest at DBC</h5>';

    echo '<h2 class="sectionTitle">New features, guides, and other news</h2>';

echo '</div>';

// news titles

echo '<div class="newsContainer">';


echo '<div class="newsTopLayout">';
            echo '<div class="newsImgContainer">';
                echo '<img class="newsImg "src="' . get_field('main_article_image') . ' ">';
            echo '</div>';

    echo '<div class="newsIntro">';
            echo '<h3 class="newsCategory">';
                        echo get_field('category');
            echo "</h3>";

            echo "<h2>";
                echo get_field('article_heading');
            echo "</h2>";

            echo '<p>';
                echo get_field('article_intro');
            echo '</p>';
    echo '</div>';

        echo '</div>';

    // news body

        echo '<div class="wysiwygContainer newsContainer">';
                            echo get_field('article_body');
            echo '</div>';

    // related cards at the bottom

    echo '<div class="blockContainer">';

    echo '<div class="cardContainer">';

                            if(have_rows('related_article_cards')):

                                while( have_rows('related_article_cards')) : the_row();
                                $news_article = get_sub_field('article');
                                $news_article_img = get_field('main_article_image', $news_article ->ID);
                                $news_article_title = get_field('article_heading', $news_article->ID);
                                $news_article_intro = get_field('article_intro', $news_article->ID);

                                    
                                    
                                        echo '<div class="customCard">';

                                            echo '<div class="holdLayout">';

                                                echo '<img src=" '. $news_article_img .' ">';

                                                echo '<h5> ' . $news_article_title . '</h5>';

                                                echo '<p class="abbridged"> '. $news_article_intro .'</p>';

                                            echo '</div>';

                                            echo '<div class="buttonContainer">';
                                                echo '<button class="ctaButton ctaButtonlightBlue">Read More</button>';
                                            echo '</div>';


                                        echo '</div>';
                           
                                
                                endwhile;
                                
                            endif;
                        
                        echo '</div>';
                    echo '</div>';

                    
                echo '</div>';







echo '</div>';


?>