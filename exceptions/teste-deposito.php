<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require 'autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular(
        new CPF('379.695.468-54'), 
        'Luan', 
        new Endereco('Martinopolis', 'JD. Paulista', 'Alcides Ramos da Silva', '315')
    )
);
try{
    $contaCorrente->deposita(-100);
}catch (InvalidArgumentException $exception){
    echo "Valor a deposita precisa ser Positivo.";
}