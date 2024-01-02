<?php

namespace app\models;

class Calcular
{
    public function calc($potencia, $altura, $comprimento)
    {
        $area = $comprimento * $altura;
        $totalLampadas = ($area * 18) / $potencia;
        return $totalLampadas;
    }
}
