<div class="container main-cardapio__grid">
    <?php
    $arrayCardapio = array(
      'post_type' => 'cardapio',
      'posts_per_page' => -1,
    );

    $loopCardapio = new WP_Query($arrayCardapio);
    if($loopCardapio->have_posts()) {
      while ($loopCardapio->have_posts()) {
        $loopCardapio->the_post();
        ?>
        <div class="item-cardapio">
          <?= get_field('titulo_cardapio', get_the_ID()) ?>

          <span class="item-cardapio__detalhes-item"><?= get_field('descricao_cardapio', get_the_ID()) ?></span>
        </div>
        <div class="item-cardapio">
          <?= (get_field('preco_cardapio', get_the_ID()))? "R$ " .get_field('preco_cardapio', get_the_ID()) : ""; ?>
        </div>
        <?php
      }
    }
    ?>
</div>
