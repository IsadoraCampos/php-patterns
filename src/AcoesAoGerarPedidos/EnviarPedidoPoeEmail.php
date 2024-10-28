<?php

namespace Alura\DesignPattern\AcoesAoGerarPedidos;

use Alura\DesignPattern\Pedido\Pedido;

class EnviarPedidoPoeEmail implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido) : void {
        echo $pedido->nomeCliente;
        echo "Gerando email do pedido gerado" . PHP_EOL;
    }
}