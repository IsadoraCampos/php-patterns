<?php

require "vendor/autoload.php";

use Alura\DesignPattern\AcoesAoGerarPedidos\CriarPedidoNoBanco;

$valorOrcamento = $argv[1]; //$argv é uma variável pronta do php, a 1° posição é o nome do arquivo
$numeroItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new \Alura\DesignPattern\GerarPedido($valorOrcamento, $numeroItens, $nomeCliente);
$gerarPedidoHandler = new \Alura\DesignPattern\GerarPedidoHandler();
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new CriarPedidoNoBanco());
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new \Alura\DesignPattern\AcoesAoGerarPedidos\EnviarPedidoPoeEmail());
$gerarPedidoHandler->executa($gerarPedido);
