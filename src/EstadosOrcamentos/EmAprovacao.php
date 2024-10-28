<?php

namespace Alura\DesignPattern\EstadosOrcamentos;

use Alura\DesignPattern\Orcamento;

class EmAprovacao extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento) : float
    {
        return $orcamento->valor * 0.05;
    }

    public function aprova(Orcamento $orcamento) {
        $orcamento->estadoAtual = new Aprovado();
    }

    public function reprova(Orcamento $orcamento) {
        $orcamento->estadoAtual = new Reprovado();
    }

    public function finaliza(Orcamento $orcamento) {
        throw new \DomainException("Este orçamento não pode ser finalizado.");
    }
}