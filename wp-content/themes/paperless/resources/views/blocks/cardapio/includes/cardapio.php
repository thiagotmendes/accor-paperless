<?php
$terms = get_terms( array(
  'taxonomy'   => 'categoria',
  'hide_empty' => false,
) );

foreach ($terms as $term) {
  ?>
  <div id="<?= $term->slug ?>" class="mt-4 mb-4">
    <h2 class="main-title main-title__cardapio" style="background: linear-gradient(to right, <?= get_theme_mod('primary_color', 'black') ?> 2.5%, white 2.5%)">
      <?= $term->name ?>
    </h2>
  </div>
  <?php
  $arrayCardapio = array(
    'post_type' => 'cardapio',
    'posts_per_page' => -1,
    'tax_query' => array(
      array(
        'taxonomy' => 'categoria',
        'field'    => 'slug',
        'terms'    => $term->slug,
      ),
    ),
  );

  $loopCardapio = new WP_Query($arrayCardapio);
  if($loopCardapio->have_posts()) {
    while ($loopCardapio->have_posts()) {
      $loopCardapio->the_post();
      ?>
      <div class="main-box main-box__cardapio">
        <div class="">
          <h4><?php the_title() ?></h4>
          <p>(folhas, tomate cereja e palmito)</p>
          <p>R$ 39,00</p>
        </div>
        <div class="">
          <img src="<?= get_template_directory_uri() ?>/public/images/cardapio1.png" alt="" class="">
        </div>
      </div>
      <?php
    }
  }
}
