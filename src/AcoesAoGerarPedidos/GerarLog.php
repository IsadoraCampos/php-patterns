<?php

namespace Alura\DesignPattern\AcoesAoGerarPedidos;

use Alura\DesignPattern\Pedido\Pedido;

class GerarLog implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido) : void {
        echo "Gerando log de geração de pedido" . PHP_EOL;
    }
}