<?php

namespace Alura\DesignPattern\AcoesAoGerarPedidos;

use Alura\DesignPattern\Pedido\Pedido;

interface AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido) : void;
}