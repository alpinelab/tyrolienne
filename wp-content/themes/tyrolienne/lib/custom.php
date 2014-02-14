<?php
/**
 * Custom functions
 */

// Shortcode: [tyrolienne_news count=5]
function tyrolienne_news_func($atts) {
  extract(shortcode_atts(array('count' => 5), $atts));

  $news = new WP_Query(array('post_type' => 'post', 'posts_per_page' => $count));

  ob_start();

  while ($news->have_posts()) : $news->the_post();
    get_template_part('templates/content', get_post_format());
  endwhile;

  return ob_get_clean();
}
add_shortcode('tyrolienne_news', 'tyrolienne_news_func' );


// URL helper
function image_asset($filename) {
  return get_stylesheet_directory_uri() . '/assets/img/' . $filename;
}

// Post formats
add_theme_support('post-formats', array('aside'));
