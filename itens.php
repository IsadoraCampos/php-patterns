<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\ItemOrcamento;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\CacheOrcamentoProxy;


$orcamento = new Orcamento();
$item1 = new ItemOrcamento();
$item1->valor = 300;

$item2 = new ItemOrcamento();
$item2->valor = 500;

$orcamentoAntigo = new Orcamento();
$item3 = new ItemOrcamento();
$item3->valor = 150;
$orcamentoAntigo->adicionaItensOrcamento($item3);

$orcamento->adicionaItensOrcamento($item1);
$orcamento->adicionaItensOrcamento($item2);
$orcamento->adicionaItensOrcamento($orcamentoAntigo);

$proxyCache = new CacheOrcamentoProxy($orcamento);

echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;