<?php

namespace app\models;

class Calcular
{
    public function calc($fah)
    {
        $cel = ($fah - 32) / 1.8;
        return $cel;
    }
}
