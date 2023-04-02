<div class="mb-4">
    <h2><?php the_field('titulo'); ?></h2>
    <p><?php the_field('subtitulo'); ?></p>
</div>

<div class="main-guia mb-4">
    <div class="main-guia__grid main-guia__linha-canal">
        <?php if( have_rows('lista_itens_guia') ): ?>
            <?php while( have_rows('lista_itens_guia') ): the_row(); ?>
                <div class="main-guia__box">
                    <p class="main-guia main-guia__canal">
                        <span><?php the_sub_field('numero_item'); ?></span> . <?php the_sub_field('nome_item'); ?>
                    </p>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>