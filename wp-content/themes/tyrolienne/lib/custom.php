<?php
/**
 * Custom functions
 */

// [tyrolienne_news count=5]
function tyrolienne_news_func($atts) {
  extract(shortcode_atts(array('count' => 5), $atts));

  query_posts(array('post_type' => 'post', 'posts_per_page' => $count));

  ob_start();

  while (have_posts()) : the_post();
    get_template_part('templates/content', get_post_format());
  endwhile;

  return ob_get_clean();
}
add_shortcode('tyrolienne_news', 'tyrolienne_news_func' );
