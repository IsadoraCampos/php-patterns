<?php

require_once "vendor/autoload.php";

use Alura\DesignPattern\NotaFiscal\NotaFiscal;
use Alura\DesignPattern\NotaFiscal\ConstrutorNotaFiscal;

$builder = new \Alura\DesignPattern\NotaFiscal\ConstrutorNotaFiscalProduto();

$item1 = new \Alura\DesignPattern\ItemOrcamento();
$item1->valor = 500;

$item2 = new \Alura\DesignPattern\ItemOrcamento();
$item2->valor = 700;

$notaFiscal = $builder->paraEmpresa('293i293823', 'Vitoria Regia Tec e Café')
    ->comItem($item1)
    ->comItem($item2)
    ->comObs('Esta é uma nota fiscal')->constroiNota();

echo $notaFiscal->valorImpostos;