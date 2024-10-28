<?php

require "vendor/autoload.php";

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\CalculadoraDescontos;
use Alura\DesignPattern\Impostos\ICMS;

/*$calculadora = new CalculadoraDeImpostos();
$orcamento = new Orcamento();
$orcamento->valor = 100;
$imposto = new \Alura\DesignPattern\Impostos\ISS();

echo $calculadora->calcula($orcamento, $imposto) . PHP_EOL;
*/


$calculadora = new CalculadoraDescontos();
$orcamento = new Orcamento();
$orcamento->valor = 200;
$orcamento->quantidadeItens = 4;
echo $calculadora->calculaDesconto($orcamento) . PHP_EOL;
