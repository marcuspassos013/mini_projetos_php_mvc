<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Calcular;

class HomeController extends Controller
{

    public function index(): void
    {
        $dados["view"] = "index";
        $this->load("index", $dados);
    }

    public function converter()
    {
        $objConverter = new Calcular();
        $fah = $_POST["fah"] ?? null;

        $dados["celsius"] = $objConverter->calc($fah);

        $dados["fah"] = $fah;

        $dados["view"] = "index";
        $this->load("index", $dados);
    }
}
