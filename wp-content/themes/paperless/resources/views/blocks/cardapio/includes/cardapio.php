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
          <h4><?= get_field('titulo_cardapio', get_the_ID()) ?></h4>
          <p><?= get_field('descricao_cardapio', get_the_ID()) ?></p>
          <p><?= (get_field('preco_cardapio', get_the_ID()))? "R$ " .get_field('preco_cardapio', get_the_ID()) : ""; ?></p>
        </div>
        <div class="">
          <?php
          $img = esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) );
          if(has_post_thumbnail()) {
            $img = get_the_post_thumbnail_url();
          }
          ?>
          <img src="<?= $img ?>" alt="" class="" width="66" height="66" />
        </div>
      </div>
      <?php
    }
  }
}
