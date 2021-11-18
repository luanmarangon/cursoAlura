<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa
{
    use AcessoPropriedades;

    protected $nome;
    private $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        try {
            $this->nome = $nome;
        } catch (NomeInvalidoException $exception) {
            echo "Nome Incorreto";
        }
       
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    final protected function validaNome(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            // echo "Nome precisa ter pelo menos 5 caracteres";
            // exit();
            throw new NomeInvalidoException($nomeTitular);
        }
    }
}
