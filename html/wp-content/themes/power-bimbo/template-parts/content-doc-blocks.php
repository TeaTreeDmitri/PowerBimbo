
<?php
if (have_rows('block')):
  while (have_rows('block')): the_row();
    echo '<div id='. get_sub_field('anchor') .'>';



    

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
                                    echo '<h1>';
                                    echo $heading;
                                    echo '</h1>';
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

                                    echo '<a href="' . $button_url . '" target="' . $button_target . '">';
                                    echo "<button class='ctaButton .ctaButtondarkBlue'>";
                                    echo  $button_title ;
                                echo "</button>";
                                echo '</a>';

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

           

while (have_rows('featured_article')): the_row();
$news_article= get_sub_field('news_article');
$news_article_heading= get_field('header', $news_article->ID );


                    echo '<div class="article" >';
                                        echo '<h3>';
                                 echo $news_article->post_title;
                                        echo '</h3>';
                                    echo '<a class="ctaButton ctaButtondarkBlue"  href="' . get_permalink($news_article->ID) . '">';
                                    echo 'Read More';
                                echo '</a>';
                  
                                    echo '</div>';
                                  
                                endwhile;
                                
                 echo '<div class="readMoreCard ">';
echo '<a class="ctaButton ctaButtonlightBlue" href="'.get_page_link( 287) .'">';
echo 'All News';
echo '</a>';
                 echo '</div>';
                            
               

        echo '</div>';       
        echo '</div>';
        echo '</div>';
break;

        // documentation // 

case "documentation";

echo '<div class="documentation">';
           
                       
            echo '<div class="left-panel">';

            while (have_rows('subjects')): the_row();
            $subject= get_sub_field('subject');
            $subject_subheading= get_field( 'subheading', $subject->ID );
            $suboffering = get_field('subject_offering', $subject->ID);
echo '<div class="subjectDrop">';

echo '<div class="subjectHeading">';
    echo '<span class="material-symbols-outlined">
    expand_more
    </span>';
              echo '<h5 >' . $subject->post_title . '</h5>';
echo '</div>';
       
          echo '<a class="subjectLink" href="#' . $subject->post_title .'">';
          echo '<span class="material-symbols-outlined">
          description
          </span>';
          echo '<p >' . $subject->post_title .'</p>';
          echo '</a>';
                    if($suboffering):
                        foreach($suboffering as $value):
                            echo '<a class="subOffering" href="#' . $value['offering_heading'] .'">';
                           echo' <span class="material-symbols-outlined">
                           format_list_bulleted
                           </span>';
                        echo '<p >' .$value['offering_heading'].'</p>';
                        echo '</a>';
                        endforeach;
                    endif;
                    echo '</div>';
                endwhile;
                echo '</div>';
           

             echo'<div class="documentation-main">';

             echo '<div class="disclaimerBox">';

                      echo  ' <div class="disclaimerText">';
                          
                            if (get_sub_field('documentation_intro_header')):
                                echo '<h3>';
                                echo get_sub_field('documentation_intro_header');
                                echo '</h3>';
                    endif;
                    if (get_sub_field('documentation_intro_text')):
                        echo '<p>';
                        echo get_sub_field('documentation_intro_text');
                        echo '</p>';
            endif;

                       echo ' </div>';
                        if (get_sub_field('docs_intro_image')):
                          
                            echo '<div class="docsIntroImage" style="background-image: url(';
                            echo  get_sub_field('docs_intro_image');
                              echo ')">';
                              echo '</div>';
                        endif;
             echo '</div>';

             while (have_rows('subjects')): the_row();
            
           
             $subject= get_sub_field('subject');
             $subject_subheading= get_field( 'subheading', $subject->ID );
             $subject_body=get_field('subject_body', $subject->ID);
             $suboffering = get_field('subject_offering', $subject->ID);
             echo '<div class="docSection" id="documents" >';
    
             echo '<h3 class="docSubjectHeading" id="' . $subject->post_title .'">' . $subject->post_title . '</h3>';
             echo '<h4 class="docSubjectSubheading">' . $subject_subheading . '</h4>';
             echo '<div class="subjectBody">' . $subject_body . '</div>';
                    if($suboffering):
                        foreach($suboffering as $value):
                           $anchor=$value['offering_heading'];
                        echo '<h5 class="offeringHeading" id="' . $anchor .'" >' .$value['offering_heading'].'</h5>';
                        echo '<h5 class="offeringSubheading">' .$value['offering_subheading'].'</h5>';
                        echo '<div class="offeringBody">';
                        echo  $value['offering_body'];
                        echo '</div>';    
                
                        endforeach;
                    endif;
echo '</div>';               
 endwhile;
            echo '</div>';


                    
echo '</div>';



       default:
       break;
    }
echo '</div>';
endwhile;
endif;


?>