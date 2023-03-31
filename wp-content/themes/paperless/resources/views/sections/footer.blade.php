<footer class="main-bottom_bar fixed-bottom" style="background-color: {{ $colors['principal-color'] }}">
  <nav class="main-bottom_bar__menu">
      <a href="tel:55{{ get_field('bottom_phone','option') }}" class="">
        <img src="{{ asset("images/telefone.svg") }}" alt="" class="">
      </a>
      <a href="https://wa.me/55{{ get_field('bottom_whatsapp','option') }}" target="_blank" class="">
        <img src="{{ asset("images/whatsapp.svg") }}" alt="" class="">
      </a>
      <a href="{{ get_field('bottom_instagram','option') }}" target="_blank" class="">
        <img src="{{ asset("images/instagram.svg") }}" alt="" class="">
      </a>
  </nav>
</footer>
