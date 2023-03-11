<?php 

function suma() {
  $valor1 = 10;
  $valor2 = 5;
  $resultado = $valor1 + $valor2;
  print_r('<p>10 + 5 =</p>');
  print_r($resultado);
}

function resta() {
  $valor1 = 10;
  $valor2 = 5;
  $resultado = $valor1 - $valor2;
  print_r('<p>10 - 5 =</p>');
  print_r($resultado);
}

function multiplicacion() {
  $valor1 = 10;
  $valor2 = 5;
  $resultado = $valor1 * $valor2;
  print_r('<p>10 x 5 =<p>');
  print_r($resultado);
}

function division() {
  $valor1 = 10;
  $valor2 = 5;
  $resultado = $valor1 / $valor2;
  print_r('<p>10 / 5 =<p>');
  print_r($resultado);
}

suma();
resta();
multiplicacion();
division();
?>