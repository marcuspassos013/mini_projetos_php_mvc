<?php

namespace app\controllers;

use app\core\Controller;
use app\models\DiasTotal;



class HomeController extends Controller
{

    public function index(): void
    {
        //$dados["totalDias"] = null;
        $dados["view"] = "index";
        $this->load("index", $dados);
    }

    public function idade()
    {
        $objDiasTotal = new DiasTotal();
        $ano = $_POST["ano"] ?? null;
        $mes = $_POST["mes"] ?? null;
        $dia = $_POST["dia"] ?? null;

        $dados["totalDias"] = $objDiasTotal->diasTotal($ano,$mes,$dia);

        $dados["ano"] = $ano;
        $dados["mes"] = $mes;
        $dados["dia"] = $dia;

        $dados["view"] = "index";
        $this->load("index", $dados);
    }
}
