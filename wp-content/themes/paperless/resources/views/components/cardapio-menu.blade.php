<div class="container mb-4">
  <div class="swiper_menu">
    <div class="swiper-wrapper">
      @for($i = 0; $i < 10; $i++)
      <a href="#" class="swiper-slide main-cardapio__menu" style="background-color: {{ (!empty($colors))? $colors['principal-color'] : '' }}">
        Entrada
      </a>
      @endfor
    </div>
  </div>
</div>
