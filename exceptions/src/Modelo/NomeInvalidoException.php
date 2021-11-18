<?php

namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Pessoa;
use DomainException;

class NomeInvalidoException extends DomainException
{
    public function __construct(String $nomeTitular)
    {
        $messagem = "Você Informou um nome Invalido. $nomeTitular";
        parent::__construct($messagem);        
    }
}