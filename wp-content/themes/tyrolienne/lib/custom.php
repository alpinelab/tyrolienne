<?php
/**
 * Custom functions
 */

function get_page_content($atts) {
  extract(shortcode_atts(array(
    'id' => null,
    'title' => false,
    ), $atts));
  $the_query = new WP_Query('page_id='.$id);
  while ($the_query->have_posts()) {
    $the_query->the_post();
    if($title == true){
      the_title();
    }
    the_content();
  }
  wp_reset_postdata();
}
add_shortcode('my_content', 'get_page_content');

// Shortcode: [tyrolienne_news count=5]
function tyrolienne_news_func($atts) {
  extract(shortcode_atts(array('count' => 5), $atts));

  $cat_id = get_cat_ID('Concours');

  $news = new WP_Query(array('category__not_in' => $cat_id,'post_type' => 'post', 'posts_per_page' => $count));

  ob_start();

  while ($news->have_posts()) : $news->the_post();
    get_template_part('templates/content', get_post_format());
  endwhile;

  return ob_get_clean();
}
add_shortcode('tyrolienne_news', 'tyrolienne_news_func' );

// Shortcode: [tyrolienne_contests count=1]
function tyrolienne_contests_func($atts) {
  extract(shortcode_atts(array('count' => 1), $atts));

  $cat_id = get_cat_ID('Concours');

  $contests = new WP_Query(array('category__in' => $cat_id, 'post_type' => 'post'));

  ob_start();

  while ($contests->have_posts()) : $contests->the_post();
    get_template_part('templates/content', get_post_format());
  endwhile;

  return ob_get_clean();
}
add_shortcode('tyrolienne_contests', 'tyrolienne_contests_func');

//Test if "contests" posts exist
function tyrolienne_contest_exists_func() {
  $cat_id = get_cat_ID('Concours');
  
  $contests = new WP_Query(array('category__in' => $cat_id, 'post_status' => 'publish'));
  
  $contests_count = $contests->post_count;

  return $contests_count > 0;
}

// URL helper
function image_asset($filename) {
  return get_stylesheet_directory_uri() . '/assets/img/' . $filename;
}

// Post formats
add_theme_support('post-formats', array('aside', 'gallery'));

// Carousel
function carousel_func() {
  $attachments = get_posts(array(
    'post_type'   => 'attachment',
    'numberposts' => null,
    'post_status' => null,
    'post_parent' => get_the_ID()
  ));
  if ($attachments) {
    ob_start(); ?>
    <div id="post-carousel-<?= get_the_ID() ?>" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators"> <?
        for ($i = 0; $i < count($attachments); $i++) { ?>
          <li data-target="#post-carousel-<?= get_the_ID() ?>" data-slide-to="<?= $i ?>" class="<?= $i == 0 ? 'active' : '' ?>"></li> <?
        } ?>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner"> <?
        foreach ($attachments as $idx => $attachment) {
          $img = wp_get_attachment_image_src($attachment->ID, 'large'); ?>
          <div class="item <?= $idx == 0 ? 'active' : '' ?>">
            <img src="<?= $img[0] ?>" alt="<?= $attachment->post_title ?>">
          </div> <?
        } ?>
      </div>
      <!-- Controls -->
      <a class="left carousel-control" href="#post-carousel-<?= get_the_ID() ?>" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#post-carousel-<?= get_the_ID() ?>" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div> <?
  }
  return ob_get_clean();
}
add_shortcode('carousel', 'carousel_func');
