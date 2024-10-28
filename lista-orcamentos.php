<?php

require_once "vendor/autoload.php";

use Alura\DesignPattern\Orcamento;

$orcamento1 = new Orcamento();
$orcamento1->quantidadeItens = 7;
$orcamento1->reprova();
$orcamento1->valor = 1500.75;

$orcamento2 = new Orcamento();
$orcamento2->quantidadeItens = 9;
$orcamento2->aprova();
$orcamento2->finaliza();
$orcamento2->valor = 1200;

$orcamento3 = new Orcamento();
$orcamento3->quantidadeItens = 4;
$orcamento3->aprova();
$orcamento3->valor = 2450.50;

$listaOrcamento = new \Alura\DesignPattern\ListaDeOrcamentos();
$listaOrcamento->adicionaOrcamento($orcamento1);
$listaOrcamento->adicionaOrcamento($orcamento2);
$listaOrcamento->adicionaOrcamento($orcamento3);

/*foreach ($listaOrcamento as $orcamento) {
    echo $orcamento->valor . PHP_EOL;
    echo $orcamento->quantidadeItens . PHP_EOL;
    echo get_class($orcamento->estadoAtual) . PHP_EOL;
    echo PHP_EOL;
}*/


foreach ($listaOrcamento->orcamentosFinalizados() as $orcamento) {
    echo $orcamento->valor . PHP_EOL;
    echo $orcamento->quantidadeItens . PHP_EOL;
    echo get_class($orcamento->estadoAtual) . PHP_EOL;
    echo PHP_EOL;
}