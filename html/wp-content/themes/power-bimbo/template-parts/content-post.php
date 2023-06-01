<?php

echo '<div class="container-fluid">';
echo'<p>';
echo 'This is a news article ';
echo'</p>';
echo '<h4>';
echo get_the_title();
echo '</h4>';
get_template_part('/template-parts/content', 'blocks');

echo '</div>';


?>