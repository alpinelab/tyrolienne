<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>

    <header>
      <h3 class="entry-title"><?php the_title(); ?></h3>
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

  </article>
<?php endwhile; ?>
