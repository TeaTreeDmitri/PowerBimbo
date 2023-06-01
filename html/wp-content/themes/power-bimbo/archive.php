<?php
/**
* The archive content template.
* Template Name: Archive
*
* @package powerbimbo
*/

get_header();
?>

    <?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => -1, // Retrieve all posts
    );

    $query = new WP_Query($args);

    if ($query->have_posts()):

      // heading section

  echo '<div class="blockContainer">';

    echo '<h5 class="sectionSubtitle"> The latest at DBC</h5>';

    echo '<h2 class="sectionTitle">New features, guides, and other news</h2>';

  echo '</div>';
  
  
  echo '<div class="blockContainer">';

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

          echo '<div class="buttonContainer">';
              echo '<button class="ctaButton ctaButtonlightBlue">Read More</button>';
          echo '</div>';


        echo '</div>';
        
                    endwhile;

    echo '</div>';
    
  echo '</div>';
  
      wp_reset_postdata(); // Reset the post data
    else :
      echo '<li>No posts found.</li>';
    endif;
    ?>


<?php get_footer(); ?>
