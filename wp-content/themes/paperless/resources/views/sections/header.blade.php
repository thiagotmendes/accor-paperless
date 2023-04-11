<header class="main-header">
  <div class="main-header__back-page">
    <a href="{{ home_url('/') }}">
      <div class="icon-back" style="background-color:<?= get_theme_mod('secondary_color', 'black') ?>">
          <img src="{{ asset("images/arrow.png") }}" alt="">
      </div>
    </a>
  </div>

  <div class="main-header__logo">
    <a class="brand" href="{{ home_url('/') }}">
      {!! get_custom_logo() !!}
    </a>
  </div>
</header>
