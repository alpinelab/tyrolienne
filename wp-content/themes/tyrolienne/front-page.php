<?php if(tyrolienne_contest_exists_func()) : ?>
<section id="contests">
  <h2><i class="glyphicon glyphicon-chevron-right"></i>CONCOURS</h2>
  <?= do_shortcode('[tyrolienne_contests count=1]') ?>
</section>
<?php endif; ?>

<section id="community">
  <h2><i class="glyphicon glyphicon-chevron-right"></i>COMMUNITY</h2>
  <?= do_shortcode('[dc_social_wall id="16" icon_path="../../../themes/tyrolienne/assets/img/wp-social-stream/" image_path="../../../themes/tyrolienne/assets/img/wp-social-stream/"]') ?>
</section>

<section id="info">
  <h2><i class="glyphicon glyphicon-chevron-right"></i>ACCÈS / INFO / TARIFS</h2>
  <img src="<?= image_asset('bandeau-trace-tyrolienne.jpg') ?>">
  <?php get_template_part('templates/content', 'page'); ?>
</section>

<section id="news">
  <h2><i class="glyphicon glyphicon-chevron-right"></i>NEWS</h2>
  <?= do_shortcode('[tyrolienne_news count=3]') ?>
</section>
