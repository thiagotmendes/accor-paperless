@php
$cssClass = "main-box--transparent";
$backgroundColor = "";
$icon = asset("images/icon1.svg");
if($i % 2 == 1):
  $cssClass = "main-box--background";
  $backgroundColor = $colors['principal-color'];
  $icon = asset("images/icon2.svg");
endif
@endphp
<a class="main-box {{ $cssClass }}" style="background-color: {{ $backgroundColor }}" >
  <div class="main-box__image">
    <img src="{{ $icon }}" alt="" class="">
  </div>
  <div class="main-box__title">
    Room Service
  </div>
</a>
