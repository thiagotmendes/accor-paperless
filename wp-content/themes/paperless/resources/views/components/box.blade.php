@php
$cssClass = "main-box--transparent";
$backgroundColor = "";
$leftBorderColor = $colors['principal-color'];

if($count % 2 == 1):
  $leftBorderColor = $colors['secondary-color'];
endif;
if(get_field('menu_style', 'option') != 'transparent') {
  $cssClass = "main-box--background";
  $backgroundColor = $colors['principal-color'];
  $leftBorderColor = "";
}
@endphp
<a href="{{ get_sub_field('menu_link') }}" class="main-box {{ $cssClass }}" style="background-color: {{ $backgroundColor }}" >
  <div class="main-box__image">
    <img src="{{ get_sub_field('menu_icon') }}" alt="" class="">
  </div>
  <div class="main-box__title" style="background: linear-gradient(to right, {{ $leftBorderColor }} 5%, white 5%)">
    {{ get_sub_field('menu_title') }}
  </div>
</a>

