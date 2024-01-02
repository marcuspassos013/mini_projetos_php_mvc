<?php

namespace app\models;

class Calcular
{
    public function media($nota1, $nota2, $nota3)
    {
        $media = ($nota1 + $nota2 + $nota3) / 3;
        return $media;
    }
}
