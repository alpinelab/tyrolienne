<header class="banner navbar navbar-default navbar-static-top" data-spy="affix" data-offset-top="400" role="banner">
  <div class="container">

    <div class="navbar-header">

      <h1 class="logo">
        <a href="<?= home_url() ?>">
          <img src="<?= image_asset('tyrolienne-logo-header-big.png') ?>" alt="La Tyrolienne">
        </a>
      </h1>

      <div class="mini-logo">
        <a href="<?= home_url() ?>">
          <img src="<?= image_asset('tyrolienne-logo-header-small.png') ?>">
        </a>
      </div>

      <h2 class="primary-header-content">
        Orelle <i class="glyphicon glyphicon-chevron-right"></i> Val Thorens
        <span class="baseline">À vol d'oiseau</span>
      </h2>

      <div class="secondary-header-content">
        <span class="baseline-en yellow">As the eagle flies</span>
        <span class="hashtag">#latyrolienne</span>
      </div>

      <div class="resorts-content">

        <div class="resort valthorens">
          <a href="http://www.valthorens.com" target="_blank">
            <img class="logo" src="<?= image_asset('logo-valthorens-small.png') ?>"></img>
          </a>
          <div class="social-networks">
            <a href="https://twitter.com/Val_Tho" target="_blank">
              <img src="<?= image_asset('icon-twitter.png') ?>">
            </a>
            <a href="https://www.youtube.com/user/valthoweb" target="_blank">
              <img src="<?= image_asset('icon-youtube.png') ?>">
            </a>
            <a href="https://www.facebook.com/valthorens.resort" target="_blank">
              <img src="<?= image_asset('icon-facebook.png') ?>">
            </a>
          </div>
        </div>

        <div class="fix-submenu">
          <?php if(tyrolienne_contest_exists_func()) : ?>
            <a href="#contests">CONCOURS</a>
          <?php endif; ?>
          <a href="#community">COMMUNITY</a>
          <a href="#info">INFO</a>
          <a href="#webcam">WEBCAM</a>
          <a href="#news">NEWS</a>
        </div>

        <div class="resort orelle">
          <a href="http://www.orelle.net" target="_blank">
            <img class="logo" src="<?= image_asset('logo-orelle-small.png') ?>"></img>
          </a>
          <div class="social-networks">
            <a href="https://www.youtube.com/user/OTOrelle" target="_blank">
              <img src="<?= image_asset('icon-youtube.png') ?>">
            </a>
            <a href="http://instagram.com/orelle_les3vallees" target="_blank">
              <img src="<?= image_asset('icon-instagram.png') ?>">
            </a>
            <a href="https://www.facebook.com/pages/Orelle-Les-3-Vall%C3%A9es/116306588613" target="_blank">
              <img src="<?= image_asset('icon-facebook.png') ?>">
            </a>
          </div>
        </div>

      </div>

    </div>

  </div>

  <div class="submenu">
    <?php if(tyrolienne_contest_exists_func()) : ?>
      <a href="#contests">CONCOURS</a>
    <?php endif; ?>
    <a href="#community">COMMUNITY</a>
    <a href="#info">INFO</a>
    <a href="#webcam">WEBCAM</a>
    <a href="#news">NEWS</a>
  </div>

</header>
