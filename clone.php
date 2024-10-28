<?php

require_once "vendor/autoload.php";

$builder = new \Alura\DesignPattern\NotaFiscal\ConstrutorNotaFiscalProduto();

$item1 = new \Alura\DesignPattern\ItemOrcamento();
$item1->valor = 500;

$item2 = new \Alura\DesignPattern\ItemOrcamento();
$item2->valor = 700;

$notaFiscal = $builder->paraEmpresa('293i293823', 'Vitoria Regia Tec e Café')
    ->comItem($item1)
    ->comItem($item2)
    ->comObs('Esta é uma nota fiscal')->constroiNota();

$notaFiscal2 = clone $notaFiscal;

var_dump($notaFiscal, $notaFiscal2);

