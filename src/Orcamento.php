<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\EstadosOrcamentos\EmAprovacao;
use Alura\DesignPattern\EstadosOrcamentos\EstadoOrcamento;

class Orcamento implements Orcavel
{
    private array $itens;
    /*public float $valor;
    public int $quantidadeItens;*/
    public EstadoOrcamento $estadoAtual;

    public function __construct()
    {
        $this->estadoAtual = new EmAprovacao();
        $this->itens = [];
    }

    public function aplicaDescontoExtra(){
        $this->valor -= $this->estadoAtual-> calculaDescontoExtra($this);
    }

    public function aprova() {
        $this->estadoAtual->aprova($this);
    }

    public function reprova() {
        $this->estadoAtual->reprova($this);
    }

    public function finaliza() {
        $this->estadoAtual->finaliza($this);
    }

    public function adicionaItensOrcamento(Orcavel $itemOrcamento) {
        $this->itens[] = $itemOrcamento;
    }

    public function valor() : float{
        return array_reduce($this->itens,
        fn (float $valorAcumulado, Orcavel $item) => $valorAcumulado + $item->valor(),
        0
        );
    }
}