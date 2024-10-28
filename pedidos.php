<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\{Orcamento};
use Alura\DesignPattern\Pedido\CriadorDePedido;

$pedidos = [];
$cridorPedido = new CriadorDePedido();

//$dados->nomeCliente = md5((string) rand(1,100));  //gera string aleatória

for ($i = 0; $i < 100; $i++) {
    $orcamento = new Orcamento();
    $pedido = $cridorPedido->criaPedido('Vitoria Regia', date('Y-m-d'), $orcamento);

    $pedidos[$i] = $pedido;
}

echo memory_get_peak_usage() . PHP_EOL; //retorna, em bites, quanto de memória foi utilizada