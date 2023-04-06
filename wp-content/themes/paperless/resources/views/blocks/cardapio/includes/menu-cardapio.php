<div class="swiper_menu main-cardapio__menu--container">
  <div class="swiper-wrapper">
    <?php
    $terms = get_terms( array(
      'taxonomy'   => 'categoria',
      'hide_empty' => false,
    ) );

    foreach ($terms as $term) {
      ?>
      <a href="#<?= $term->slug ?>" class="swiper-slide main-cardapio__menu" style="background-color: <?= get_theme_mod('primary_color', 'black') ?>">
        <?= $term->name ?>
      </a>
      <?php
    }
    ?>
  </div>
</div>
