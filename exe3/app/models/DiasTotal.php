<?php

namespace app\models;

class DiasTotal
{
    public function diasTotal($ano, $mes, $dia)
    {
        $diasTotal = ($ano * 365) + ($mes * 30) + $dia;
        return $diasTotal;
    }
}
