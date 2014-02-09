<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>

  <? if (has_post_thumbnail()) { ?>
    <? $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
    <div class="post-thumbnail" style="background-image: url('<?= $featured_image[0] ?>');"></div>
  <? } ?>

  <div class="entry-summary">
    <?php the_content(); ?>
  </div>
</article>
