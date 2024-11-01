<?php

namespace Alura\DesignPattern;

use Traversable;

class ListaDeOrcamentos implements \IteratorAggregate
{
    /**
    * @var Orcamento[]
     */
    private array $orcamentos;

    public function __construct()
    {
        $this->orcamentos = [];
    }

    public function adicionaOrcamento(Orcamento $orcamento) {
        $this->orcamentos[] = $orcamento;
    }

    public function getIterator(): Traversable
    {
        return new \ArrayIterator($this->orcamentos);
    }

    public function orcamentosFinalizados(): array {
       return array_filter($this->orcamentos,
       fn (Orcamento $orcamento) => $orcamento->estadoAtual instanceof EstadosOrcamentos\Finalizado);
    }
}