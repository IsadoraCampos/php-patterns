<?php

namespace Alura\DesignPattern;

class CacheOrcamentoProxy extends Orcamento
{
    private float $valorCache = 0;

    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    public function adicionaItensOrcamento(Orcavel $itemOrcamento)
    {
        throw new \DomainException("Não é possível adicionar itens a orçamento cacheado");
    }

    public function valor(): float
    {
        if ($this->valorCache == 0) {
            $this->valorCache = $this->orcamento->valor();
        }
        return $this->valorCache;
    }
}