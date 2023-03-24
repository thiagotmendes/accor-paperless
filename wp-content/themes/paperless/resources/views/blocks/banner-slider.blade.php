{{-- Use a variavel $colors  --}}
<div class="main-banner mb-4">
  <div class="main-banner__image mb-4">
    <div class="main-banner__slider swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="{{ asset('images/bn1.webp') }}" alt="" class="w-100">
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('images/bn2.jpeg') }}" alt="" class="w-100">
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('images/bn3.jpeg') }}" alt="" class="w-100">
        </div>
      </div>
    </div>
  </div>

  @if(is_home())
  <div class="container">
    <header class="main-banner__titulo" style="color: {{ (!empty($colors))? $colors['principal-color'] : '' }}">
      <h1 class="main-title text-center">
        ibis budget BH Savassi
      </h1>
    </header>
    <div class="main-banner__paragraph text-center">
      Clique nos ícones abaixo para encontrar tudo o que precisa.
    </div>
  </div>
  @else
    <div class="container">
      <header class="main-banner__titulo" style="color: {{ (!empty($colors))? $colors['principal-color'] : '' }}">
        <h1 class="main-title">
          Restaurante
        </h1>
      </header>
      <div class="main-banner__paragraph">
        Almoço e Jantar servido <br />
        das 06:00 às 23:30
      </div>
    </div>
  @endif
</div>


