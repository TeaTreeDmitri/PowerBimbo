<?php
if (have_rows('block')):
  while (have_rows('block')): the_row();
    

    switch (get_row_layout()) {

       //Graphic and Text 
       case "graphic_and_text";

echo '<div class="graphicAndText">';
   
    echo '<div class="row no-gutters">';
            echo '<div class="col-md-6 graphic blackBackground">'; 
                    if(get_sub_field('graphic')):
                        echo '<img src= "'.get_sub_field('graphic').'">';
                    endif;
            echo '</div>'; 

            echo '<div class="col-md-4 offset-1 graphicText">';
           
                        $text_box = get_sub_field('text_box');
                        $heading= $text_box['heading'];
                        $body_text=$text_box['body_text'];
                        $button=$text_box['cta'];
                        
                                if ($heading):
                                    echo '<h2>';
                                    echo $heading;
                                    echo '</h2>';
                                endif;
                                if ($body_text):
                                echo '<p>';
                                echo $body_text;
                                echo '</p>';
                            endif;
                            if( $button ):
                            $button_url = $button['url'];
                            $button_title = $button['title'];
                            $button_target = $button['target'] ? $button['target'] : '_self';
                            echo '<a class="ctaButtondarkBlue" href="' . $button_url . '" target="' . $button_target . '">' . $button_title . '</a>';
                        endif;
                       
            echo '</div>';

   echo '</div>';

echo '</div>';

break;


//FEATURED NEWS ARTICLE
   case "featured_news_articles";

        echo '<div class="featured-news-articles">';
        echo '<div class="container-fluid">';
        echo '<div class="featured-articles">';
            $article=get_sub_field('featured_article');
$link_to_news=get_sub_field('cta');
           
                if ($article):
                foreach($article as $value):
                $article_heading= $value['heading'];
                $article_link=$value['cta'];
                    echo '<div class="article" >';
               
                                    if($article_heading):
                                        echo '<h3>';
                                        echo $article_heading;
                                        echo '</h3>';
                                    endif;
                                 if($article_link):
                                    echo '<a class="ctaButtondarkBlue" href="'.$article_link['url'].'">';
                                    echo $article_link['title'];
                                echo '</a>';
                                 endif;
                                    echo '</div>';
                                        endforeach;
                                    endif;
                 echo '<div class="readMoreCard ">';
echo '<a class="cardCTA" href="'.$link_to_news['url'].'">';
echo $link_to_news['title'];
echo '</a>';
                 echo '</div>';
               

        echo '</div>';       
        echo '</div>';
        echo '</div>';





       default:
       break;
    }

endwhile;
endif;


?>