<div class="swiper_menu main-cardapio__menu--container">
  <div class="swiper-wrapper">
    <?php
    $terms = get_terms( array(
      'taxonomy'   => 'categoria',
      'hide_empty' => false,
    ) );

    foreach ($terms as $term) {
      ?>
      <a href="#<?= $term->slug ?>" class="swiper-slide main-cardapio__menu" >
        <?= $term->name ?>
      </a>
      <?php
    }
    ?>
  </div>
</div>
<style>
  .main-cardapio__menu {
    background-color: <?= get_theme_mod('primary_color', 'black') ?>
  }

  .main-cardapio__menu:hover,
  .main-cardapio__menu:focus,
  .main-cardapio__menu:active {
    background-color: <?= get_theme_mod('secondary_color', 'black') ?>;
  }
</style>
