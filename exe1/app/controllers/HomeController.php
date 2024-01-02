<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Mostrar;

class HomeController extends Controller
{

    public function index()
    {
        $dados["view"] = "index";
        $this->load("index", $dados);
    }

    public function imprimir()
    {
        $objImprimir = new Mostrar();

        $nome1 = $_POST["nome1"] ?? null;
        $nome2 = $_POST["nome2"] ?? null;

        $dados["imprimir"] = $objImprimir->imprimir($nome1,$nome2);

        $dados["nome1"] = $nome1;
        $dados["nome2"] = $nome2;
        $dados["view"] = "index";
        $this->load("index", $dados);
    }
}
