<?php


namespace app\models;


class Calcular
{

    public function calcular($salario): float
    {
        $reajuste = 1 + 0.38;
        $gratificacao = 1 + 0.20;
        $salarioBruto = $salario * ($reajuste + $gratificacao);
        return $salarioBruto;
    }

    public function salarioLiquido($salarioBruto): float
    {
        $desconto = 1 - 0.15;
        $salarioLiquido = $salarioBruto * $desconto;
        return $salarioLiquido;
    }
}
