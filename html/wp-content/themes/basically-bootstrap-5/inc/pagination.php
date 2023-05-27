<?php

function basically_bootstrap_5_pagination() {
  global $wp_query;
  $large = 999999999;
  $pagination_array = paginate_links(array(
    'base' => str_replace($large, '%#%', get_pagenum_link($large)),
    'format' => '/page/%#%',
    'current' => max(1, get_query_var('paged')),
    'total' => $wp_query->max_num_pages,
    'prev_text' => '&laquo;',
    'next_text' => '&raquo;',
    'type' => 'array'
  ));
  $output = '';

  unset($large);

  if (is_array($pagination_array) && !empty($pagination_array)) {
    $output .= '<nav class="pagination-nav-container hidden-print">';
    $output .= '<ul class="pagination justify-content-center">';
    foreach ($pagination_array as $page) {
      $output .= '<li';
      if (strpos($page, '<a') === false && strpos($page, '&hellip;') === false) {
        $output .= ' class="page-item active"';
      } else {
        $output .= ' class="page-item"';
      }
      $output .= '>';
      if (strpos($page, '<a') === false && strpos($page, '&hellip;') === false) {
        $output .= '<a class="page-link">' . $page . '</a>';
      } else {
        if (strpos($page, 'class=') === false) {
          $page = str_ireplace('<a', '<a class="page-link"', $page);
        } else {
          $page = str_ireplace('class="', 'class="page-link ', $page);
          $page = str_ireplace('class=\'', 'class=\'page-link ', $page);
        }
        $output .= $page;
      }
      $output .= '</li>';
    }
    $output .= '</ul>';
    $output .= '</nav>';
  }

  unset($page, $pagination_array);
  echo $output;
  unset($output);

}


?>
