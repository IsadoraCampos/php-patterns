<?php

namespace Alura\DesignPattern;
use Alura\DesignPattern\{Alura\DesignPattern\Pedido\Pedido};

class GerarPedido
{
    private float $valorOrcamento;
    private int $numeroItens;
    private string $nomeCliente;
    public function __construct(float $valorOrcamento, int $numeroItens, string $nomeCliente)
    {
        $this->valorOrcamento = $valorOrcamento;
        $this->numeroItens = $numeroItens;
        $this->nomeCliente = $nomeCliente;
    }

    public function executa() {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $this->numeroItens;
        $orcamento->valor = $this->valorOrcamento;

        $pedido = new \Alura\DesignPattern\Pedido\Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable(); //Pega a data de hoje
        $pedido->nomeCliente = $this->nomeCliente;
        $pedido->orcamento = $orcamento;

        echo "Cria pedido no banco de dados" . PHP_EOL;
        echo "Envia email para cliente" . PHP_EOL;
    }

    public function getNomeCliente(): string
    {
        return $this->nomeCliente;
    }

    public function getNumeroItens(): int
    {
        return $this->numeroItens;
    }

    public function getValorOrcamento(): float
    {
        return $this->valorOrcamento;
    }
}