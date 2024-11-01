<?php

namespace Alura\DesignPattern\Relatorio;
use Alura\DesignPattern\Pedido\Pedido;

class PedidoExportado implements ConteudoExportado
{

    private Pedido $pedido;

    public function __construct(Pedido $pedido){
        $this->pedido = $pedido;
    }
    public function conteudo(): array
    {
        return [
            'data-finalizacao' => $this->pedido->dataFinalizacao->format('d/m/Y'),
            'nome-cliente' => $this->pedido->nomeCliente
        ];
    }
}