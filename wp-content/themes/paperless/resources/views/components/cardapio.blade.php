<div class="mb-4">
  <h2 class="main-title main-title__cardapio" style="background: linear-gradient(to right, blue 2.5%, white 2.5%)">
    Entradas
  </h2>
</div>

<div class="container">
  @for($i = 0; $i < 4; $i++)
  <div class="main-box main-box__cardapio">
    <div class="">
      <h4>Salada verde</h4>
      <p>(folhas, tomate cereja e palmito)</p>
      <p>R$ 39,00</p>
    </div>
    <div class="">
      <img src="{{ asset('images/cardapio1.png') }}" alt="" class="">
    </div>
  </div>
  @endfor
</div>
<div class="mb-4">
  <h2 class="main-title main-title__cardapio" style="background: linear-gradient(to right, blue 2.5%, white 2.5%)">
    Pratos
  </h2>
</div>

<div class="container">
  @for($i = 0; $i < 4; $i++)
    <div class="main-box main-box__cardapio">
      <div class="">
        <h4>Salada verde</h4>
        <p>(folhas, tomate cereja e palmito)</p>
        <p>R$ 39,00</p>
      </div>
      <div class="">
        <img src="{{ asset('images/cardapio1.png') }}" alt="" class="">
      </div>
    </div>
  @endfor
</div>
