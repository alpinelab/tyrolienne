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

<section id="webcam">
  <h2><i class="glyphicon glyphicon-chevron-right"></i>WEBCAM</h2>
  <p class="text-center">
  <iframe scrolling="vertical" allowfullscreen="true" src="http://m.webcam-hd.com/orelle/tyrolienne" name="webcam" frameborder="no" height="600" width="1140"></iframe>
  </p>
  <?= do_shortcode('[my_content id=201]') ?>
 </section>

<section id="news">
  <h2><i class="glyphicon glyphicon-chevron-right"></i>NEWS</h2>
  <?= do_shortcode('[tyrolienne_news count=3]') ?>
</section>
