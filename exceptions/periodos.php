<?php

$inicio = new DateTime('2022-11-21');
$intervalo = new DateInterval('P4Y');
$fim = new DateTime('2042-11-21');
// $periodo = new DatePeriod($inicio, $intervalo, 5);
$periodo = new DatePeriod($inicio, $intervalo, $fim);


foreach ($periodo as $data) {
    echo $data->format('d/m/Y') . PHP_EOL;
}