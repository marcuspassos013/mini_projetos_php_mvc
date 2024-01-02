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

   public function calcular(): void
   {
      $objCalcular = new Calcular();
      $objSalarioLiquido = new Calcular();
      $nome = $_POST["nome"] ?? null;
      $cargo = $_POST["cargo"] ?? null;
      $idade = $_POST["idade"] ?? null;
      $salario = $_POST["salario"] ?? null;
      

      $salarioBruto = $objCalcular->calcular($salario);
      $objSalarioLiquido = $objSalarioLiquido->salarioLiquido($salarioBruto);



      $dados["nome"] = $nome;
      $dados["idade"] = $idade;
      $dados["cargo"] = $cargo;
      $dados["salario"] = number_format($salario, 2);
      $dados["salarioBruto"] = number_format($salarioBruto, decimals: 2);
      $dados["salarioLiquido"] = number_format($objSalarioLiquido, 2);


      $dados["view"] = "index";
      $this->load("index", $dados);
   }
}