<?php
if(get_field('tipo_cardapio') == 'cardapio_categoria') {
  include ("includes/menu-cardapio.php");
  include ("includes/cardapio.php");
} else {
  include ("includes/cardapio-lista.php");
}


