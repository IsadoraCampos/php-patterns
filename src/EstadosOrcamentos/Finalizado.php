<?php

namespace Alura\DesignPattern\EstadosOrcamentos;

use Alura\DesignPattern\Orcamento;

class Finalizado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento) : float
    {
        throw new \DomainException("Orçamento finalizado não pode receber desconto extra.");
    }
}