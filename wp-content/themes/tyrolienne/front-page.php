<section id="community">
  <h2><i class="glyphicon glyphicon-chevron-right"></i>COMMUNITY</h2>
  <?= do_shortcode('[dc_social_wall id="16" icon_path="../../../themes/tyrolienne/assets/img/wp-social-stream/" image_path="../../../themes/tyrolienne/assets/img/wp-social-stream/"]') ?>
</section>

<section id="info">
  <h2><i class="glyphicon glyphicon-chevron-right"></i>ACCÈS / INFO / TARIFS</h2>
  <?php get_template_part('templates/content', 'page'); ?>
</section>

<section id="news">
  <h2><i class="glyphicon glyphicon-chevron-right"></i>NEWS</h2>
  <?= do_shortcode('[tyrolienne_news count=3]') ?>
</section>
