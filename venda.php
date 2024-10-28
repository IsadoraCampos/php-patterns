<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\Venda\{VendaServicoFactory, VendaProdutosFactory};

$fabricaVenda = new VendaServicoFactory( "João");
$venda = $fabricaVenda->criarVenda();
$imposto = $fabricaVenda->pegarImposto();

var_dump($venda, $imposto);

