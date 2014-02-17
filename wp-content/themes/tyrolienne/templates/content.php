<article <?php post_class(); ?>>
  <header>
    <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>

  <? if (has_post_thumbnail()) { // Featured image or featured video
    echo the_post_thumbnail('large');
  } else { // Carousel
    echo do_shortcode('[carousel]');
  } ?>

  <div class="entry-content">
    <?php the_content(); ?>
  </div>
  <div class="clear"></div>
</article>
