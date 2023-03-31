<div class="container">
  <div class="main-grid main-grid__home">
    @if(have_rows('menu_bloco_home', 'option'))
      @php($count = 0)
      @while(have_rows('menu_bloco_home', 'option')) @php(the_row())
        @include('components/box')
        @php($count++)
      @endwhile
    @endif
  </div>
</div>

