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

            // ************************* HERO SECTION *****************************

            case "hero_video";


                if(get_sub_field('video')):

                    echo '<div class="heroSection">';

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

                        echo '<form class="whoWhere h4">';
                            echo '<div class="formStep1">';
                                echo '<label class="formQuestion" for="whoQ"> I&#39;m a  </label>';
                                echo '<select name="whoQ" id="whoList">';

                                        echo '<option value=""> </option>';
    
                                    if(get_sub_field('who1')):
                                        $who1 = get_sub_field('who1');
                                        echo '<option id="who1" value ="' . $who1 . '">' . $who1 . ' </option>';
                                    endif;

                                    if(get_sub_field('who2')):
                                        $who2 = get_sub_field('who2');
                                        echo '<option id="who2" value ="' . $who2 . '">' . $who2 . ' </option>';
                                    endif;

                                    if(get_sub_field('who3')):
                                        $who3 = get_sub_field('who3');
                                        echo '<option id="who3" value ="' . $who3 . '">' . $who3 . ' </option>';
                                    endif;

                                echo '</select>';

                            echo '</div>';


                            echo '<div class="formStep2">';
                                echo '<label class="formQuestion" for="whereQ"> looking for </label>';
                                echo '<select name="whereQ" id="whereList">';


                                echo '<option value=""> </option>';

                                if(have_rows ('where1')):
                                    while(have_rows('where1')) : the_row();
                                        echo '<option class="where1answer hidden" value=" ' . get_sub_field('where1answerlabel') . ' " data-id=" ' . get_sub_field("where1answerurl") . ' ">' . get_sub_field('where1answerlabel') . '</option>';
                                    endwhile;
                                endif;

                                if(have_rows ('where2')):
                                    while(have_rows('where2')) : the_row();
                                        echo '<option class="where2answer hidden" value=" ' . get_sub_field('where2answerlabel') . ' " data-id=" ' . get_sub_field("where2answerurl") . ' ">' . get_sub_field('where2answerlabel') . '</option>';
                                    endwhile;
                                endif;

                                if(have_rows ('where3')):
                                    while(have_rows('where3')) : the_row();
                                        echo '<option class="where3answer hidden" value=" ' . get_sub_field('where3answerlabel') . ' " data-id=" ' . get_sub_field("where3answerurl") . ' ">' . get_sub_field('where3answerlabel') . '</option>';
                                    endwhile;
                                endif;

                                echo '</select>';
                            echo '</div>';

                            echo '<a id="whoWhereButton" href=" "><img src="/wp-content/themes/power-bimbo/assets/graphics/Arrow_R.png"></a>';

                        echo'</form>';
                    echo '</div>';

                endif;

            break;

                                //*********** Video Branding Block **********

            case "branding_video";

                    echo '<div class="blockContainer" id="'. get_sub_field('anchor') .'">';
                        echo '<div class="brandingVideo ">';

                            echo '<img class="brandingVideoGraphic" src="/wp-content/themes/power-bimbo/assets/graphics/Rectangle4.svg">';

                            echo '<div class="videoContainerInfo">';
                                
                                if(get_sub_field('video')):
                                    echo '<div class="videoContainerNative ">';
                                        echo '<video loop muted autoplay>';
                                            echo '<source src=" ' . get_sub_field('video') . ' " type="video/mp4">';
                                        echo '</video>';
                                    echo '</div>';
                                endif;


                                if(get_sub_field('section_title')):
                                    echo '<h2 class="darkBlue">';
                                        echo get_sub_field('section_title');
                                    echo '</h2>';
                                endif;

                                if(get_sub_field('section_message')):
                                    echo '<p class="darkBlue">';
                                        echo get_sub_field('section_message');
                                    echo '</p>';
                                endif;

                                if(get_sub_field('cta_link')):
                                    $link = get_sub_field('cta_link');
                                    echo '<a class="buttonContainer" href="' .  $link['url'] . '">';
                                        echo "<button class='ctaButton ctaButtondarkBlue'>";
                                            echo $link['title'];
                                        echo "</button>";
                                    echo '</a>';
                                endif;

                            echo '</div>';

                        echo '</div>';
                    echo '</div>';

            break;
                
                                //*********** Portrait Shape Text Picture Block **********

            case "textpicportrait";

                if(get_sub_field('orientation') === 'left'):
                    $orietntationHorizClass = "leftToRight";
                elseif (get_sub_field('orientation') === 'right'):
                    $orietntationHorizClass = "rightToLeft";
                endif;

                $colour = get_sub_field('colour');
                echo '<div class="blockContainer" id="'. get_sub_field('anchor') .'">';

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

                                    if(get_sub_field('cta_link')):
                                        $link = get_sub_field('cta_link');
                                        echo '<a class="buttonContainer" href="' .  $link['url'] . '">';
                                            echo "<button class='ctaButton ctaButton$colour'>";
                                                echo $link['title'];
                                            echo "</button>";
                                        echo '</a>';
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

                echo '<div class="blockContainer" id="'. get_sub_field('anchor') .'">';

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

                            if(get_sub_field('cta_link')):
                                $link = get_sub_field('cta_link');
                                echo '<a class="buttonContainer" href="' .  $link['url'] . '">';
                                    echo "<button class='ctaButton ctaButton$colour'>";
                                        echo $link['title'];
                                    echo "</button>";
                                echo '</a>';
                            endif;

                        echo '</div>';
                    echo '</div>';

                echo '</div>';
            break;

                                    //*********** Full Width Quotes **********

                                    
            case "full_width_quote";

                $colour = get_sub_field('colour');
                    
                echo '<div class="blockContainer" id="'. get_sub_field('anchor') .'">';
                    
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
                            
                            if(get_sub_field('cta_link')):
                                $link = get_sub_field('cta_link');
                                echo '<a class="buttonContainer" href="' .  $link['url'] . '">';
                                    echo "<button class='ctaButton ctaButton$colour'>";
                                        echo $link['title'];
                                    echo "</button>";
                                echo '</a>';
                            endif;
                            
                            
                    echo '</div>';
                    
                echo '</div>';

            break;
                                    //*********** Full Width Image **********


            case "full_width_picture";

            echo '<div class="blockContainer" id="'. get_sub_field('anchor') .'">';

                    if(get_sub_field('image')):
                        echo '<div class="fullWidthImageContainer">';
                            echo '<img class="fullWidthImg" src="' . get_sub_field('image') . ' ">';
                        echo '</div>';
                    endif;

                echo '</div>';

            break;

                                    //*********** Static Cards **********

            case "cards_section";

            echo '<div class="blockContainer" id="'. get_sub_field('anchor') .'">';

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

                                            if(get_sub_field('cta_link')):
                                                $link = get_sub_field('cta_link');
                                                echo '<a class="buttonContainer" href="' .  $link['url'] . '">';
                                                    echo "<button class='ctaButton ctaButtonlightBlue'>";
                                                        echo $link['title'];
                                                    echo "</button>";
                                                echo '</a>';
                                            endif;


                                        echo '</div>';
                                    endif;
                                
                                endwhile;
                                
                            endif;
                        
                        echo '</div>';
                echo '</div>';


            break;

                                    //*********** Carousel Cards **********
                

            case "carousel_card_section";

            echo '<div class="blockContainer" id="'. get_sub_field('anchor') .'">';

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

                                            echo '<p class="abbridged">';
                                                echo get_sub_field('card_content');
                                            echo '</p>';

                                        echo '</div>';

                                        if(get_sub_field('cta_link')):
                                            $link = get_sub_field('cta_link');
                                            echo '<a class="buttonContainer" href="' .  $link['url'] . '">';
                                                echo "<button class='ctaButton ctaButtonlightBlue'>";
                                                    echo $link['title'];
                                                echo "</button>";
                                            echo '</a>';
                                        endif;

                                    echo '</div>';
                                endif;
                            
                            endwhile;
                            
                        endif;

                    echo '</div>';

                echo '</div>';
            break;

                             //*********** Grid List STYLING **********


            case "object_grid";

                echo '<div class="blockContainer" id="'. get_sub_field('anchor') .'">';

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

            echo '<div class="blockContainer" id="'. get_sub_field('anchor') .'">';

                    if(get_sub_field('flexible_text_content')):

                        echo '<div class="wysiwygContainer">';
                            echo get_sub_field('flexible_text_content');
                        echo '</div>';

                    endif;

            echo '</div';

            break;

            // ********* NEWS CARDS ***************************

            case "news_cards";
        
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => -1, // Retrieve all posts
    );

    $query = new WP_Query($args);

    if ($query->have_posts()):

      // heading section

  echo '<div class="blockContainer" id="'. get_sub_field('anchor') .'">';

    echo '<h5 class="sectionSubtitle"> The latest at DBC</h5>';

    echo '<h2 class="sectionTitle">New features, guides, and other news</h2>';

  echo '</div>';
  
  
  echo '<div class="blockContainer" id="'. get_sub_field('anchor') .'">';

  echo '<div class="cardContainer">';
  
  while ($query->have_posts()) :
    $query->the_post();

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

                echo '<a href=" ' . get_permalink($news_article ->ID) . ' ">';
              echo '<button class="ctaButton ctaButtonlightBlue">Read More</button>';
              echo '</a>';


        echo '</div>';
        
                    endwhile;

    echo '</div>';

            echo '<a href="' .  get_page_link('287') . '">';
                echo "<button class='ctaButton ctaButtonlightBlue'>";
                    echo get_sub_field('ctacontent');
                echo "</button>";
            echo '</a>';
    
  echo '</div>';
  
      wp_reset_postdata(); // Reset the post data
    else :
      echo '<li>No posts found.</li>';
    endif;


        };

    endwhile;

endif;

?>

<?php get_footer(); ?>


