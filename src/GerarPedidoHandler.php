<?php

namespace Alura\DesignPattern;
use Alura\DesignPattern\{AcoesAoGerarPedidos\AcaoAposGerarPedido, Alura\DesignPattern\Pedido\Pedido};

class GerarPedidoHandler
{
    /**
     * @var AcaoAposGerarPedido[]
     */
    private array $acoesAposGerarPedido = [];
    public \Alura\DesignPattern\Pedido\Pedido $pedido;

   public function adicionarAcaoAoGerarPedido(AcaoAposGerarPedido $acao){
        $this->acoesAposGerarPedido[] = $acao;
    }

    public function executa(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new \Alura\DesignPattern\Pedido\Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable(); //Pega a data de hoje
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->executaAcao($pedido);
        }
    }


}