<?php
namespace Alura;

require 'autoload.php';

$notas = array(5, 2, 10, 10, 8, 7);

$calculadora = new Calculadora();
$media = $calculadora->calculaMedia($notas);

if ($media) {
    echo "<p> A média é: $media</p>";
}else {
    echo "<p>Não foi possível calcular a Média. </p>";
}