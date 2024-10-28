<?php

namespace Alura\DesignPattern\AcoesAoGerarPedidos;

use Alura\DesignPattern\Pedido\Pedido;

class CriarPedidoNoBanco implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido) : void {
        echo "Salvando pedido no banco de dados" . PHP_EOL;
    }
}