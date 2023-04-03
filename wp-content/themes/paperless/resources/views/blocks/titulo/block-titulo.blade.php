<header class="main-banner__titulo" style="color: {{ (!empty($colors))? $colors['principal-color'] : '' }}">
  <h1 class="main-title">
    <?= get_field('titulo') ?>
  </h1>
</header>
<div class="main-banner__paragraph mb-4">
  <?= get_field('subtitulo') ?>
</div>

