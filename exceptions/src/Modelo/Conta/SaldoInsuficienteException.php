<?php
namespace Alura\Banco\Modelo\Conta;

use DomainException;
use Throwable;

class SaldoInsuficienteException extends DomainException
{
    public function __construct(float $valorSaque, float $saldo)
    {
        $messagem = "Você tentou sacar $valorSaque, mas tem apenas $saldo em conta.";
        parent::__construct($messagem);
    }
}