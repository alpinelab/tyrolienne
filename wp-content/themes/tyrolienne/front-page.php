<section id="news">
  <h2>NEWS</h2>
  <?= do_shortcode('[tyrolienne_news count=5]') ?>
</section>

<section id="community">
  <h2>COMMUNITY</h2>
  <?= do_shortcode('[dc_social_wall id="16" icon_path="../../../themes/tyrolienne/assets/img/wp-social-stream/" image_path="../../../themes/tyrolienne/assets/img/wp-social-stream/"]') ?>
</section>

<section id="infos">
  <h2>ACCÈS / INFO / TARIFS</h2>
  <?php get_template_part('templates/content', 'page'); ?>
</section>
