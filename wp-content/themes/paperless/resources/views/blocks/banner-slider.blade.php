{{-- Use a variavel $colors  --}}
<div class="main-banner mb-4">
  <div class="main-banner__image mb-4">
    <div class="main-banner__slider swiper-container">
      <div class="swiper-wrapper">
        @if(have_rows('slider_principal', 'option'))
          @php
            while(have_rows('slider_principal', 'option')) {
              the_row();
          @endphp
              <div class="swiper-slide">
                <img src="{{ get_sub_field('slider_image') }}" alt="" class="w-100">
              </div>
          @php
            }
          @endphp
        @endif
      </div>
    </div>
  </div>
</div>

<div class="">
  @if(is_front_page())
    <div class="container">
      <header class="main-banner__titulo" style="color: {{ (!empty($colors))? $colors['principal-color'] : '' }}">
        <h1 class="main-title text-center">
          {{ get_field('titulo', 'option') }}
        </h1>
      </header>
      <div class="main-banner__paragraph text-center">
        @php echo get_field('description', 'option'); @endphp
      </div>
    </div>
  @endif
</div>


