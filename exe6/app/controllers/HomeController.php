<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Calcular;

class HomeController extends Controller
{

    public function index()
    {
        $dados["view"] = "index";
        $this->load('index',$dados);
    }

    public function calcular()
    {
        $objCalcular = new Calcular();

        $potencia = $_POST["potencia"] ?? null;
        $altura = $_POST["altura"] ?? null;
        $comprimento = $_POST["comprimento"] ?? null;

        $dados["totalLampadas"] = $objCalcular->calc($potencia,$altura,$comprimento);

        $dados["potencia"] = $potencia;
        $dados["altura"] = $altura;
        $dados["comprimento"] = $comprimento;
        $dados["view"] = "index";
        $this->load("index",$dados);
    }
}
