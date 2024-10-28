<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;

abstract class Desconto
{
    protected ?Desconto $proximoDesconto;

    public function __construct(?Desconto $proximoDesconto) { //recebe um Desconto ou NULL
        $this->proximoDesconto = $proximoDesconto;
    }

    abstract public function calculaDesconto(Orcamento $orcamento) : float;
}