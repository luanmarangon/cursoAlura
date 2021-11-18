<?php
namespace Alura;
require 'autoload.php';

//Array_diff -> remove os dados iguais em dois arrays
/*
$correntistas = [
    'Giovanni',
    'João',
    'Maria',
    'Luis',
    'Luisa',
    'Rafael'
];

$correntistasNaoPaganes = [
    'Luis',
    'Luisa',
    'Rafael'
];

$correntistasPagantes = array_diff($correntistas, $correntistasNaoPaganes);
echo "<pre>";
var_dump($correntistasPagantes);

echo "</pre>"; */

$correntistas = [
    'Giovanni',
    'João',
    'Maria',
    'Luis',
    'Luisa',
    'Rafael'
];

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];
// $array_associativo = [
//     "Giovanni" => 2500, 
//     "joão" => 3000,
// ]
// $relacionados = array_merge($correntistas, $sa ldos); // merge junta os segundo array, após o Primeiro
$relacionados = array_combine($correntistas, $saldos); //  combine junta os array, usando o primeiro como a chave do array Associativo

$maiores = ArrayUtils::encontrarPessoasComSaldoMaior(3000, $relacionados);
echo "<pre>";
var_dump($maiores);

echo "</pre>";



