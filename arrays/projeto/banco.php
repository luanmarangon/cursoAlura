<?php
namespace Alura;
$saldos= [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];

foreach ($saldos as $saldo) {
    echo "<p>O Saldo é $saldo</p>";
}

sort($saldos);

echo "O menor saldo é $saldos[0]";