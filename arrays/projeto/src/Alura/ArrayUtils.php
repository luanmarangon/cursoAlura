<?php
namespace Alura;
class ArrayUtils
{
    public static function remover(string $elemento, array &$array)
    {
        $posicao = array_search($elemento, $array);
        unset($array[$posicao]);
        
    }
    public static function encontrarPessoasComSaldoMaior(int $saldo, array $array)
    {
        $correntistasComSaldoMaior = array();
        foreach ($array as $chave => $valor) {
            if ($valor > $saldo){
                $correntistasComSaldoMaior[] = $chave;
            }
        }
        return $correntistasComSaldoMaior;
    }
}