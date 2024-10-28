<?php

require_once "vendor/autoload.php";

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Relatorio\OrcamentoZip;

$orcamento = new Orcamento();
$orcamentoZip = new OrcamentoZip();

$orcamento->valor = 1200.5;
$orcamento->quantidadeItens = 3;
$orcamento->aprova();

$orcamentoZip->exporta($orcamento);