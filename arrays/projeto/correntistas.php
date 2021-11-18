<?php
namespace Alura;
use JetBrains\PhpStorm\ArrayShape;

require 'autoload.php';

$correntistas_e_compras = [
    "Giovanni", 
    "João",
    12, 
    "Maria",
    25,
    "Luis",
    "Luisa",
    "12"
];

echo "<pre>";
var_dump($correntistas_e_compras);

ArrayUtils::remover("Luis", $correntistas_e_compras);

var_dump($correntistas_e_compras);

echo "</pre>";