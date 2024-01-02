<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Calcular;

class HomeController extends Controller
{

    public function index()
    {
        $dados["view"] = "index";
        $this->load("index", $dados);
    }

    public function media()
    {
        $objMedia = new Calcular();

        $nota1 = $_POST["nota1"] ?? null;
        $nota2 = $_POST["nota2"] ?? null;
        $nota3 = $_POST["nota3"] ?? null;

        $dados["media"] = $objMedia->media($nota1, $nota2, $nota3);

        $dados["view"] = "index";
        $this->load("index", $dados);
    }
}
