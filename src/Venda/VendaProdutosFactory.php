<?php

namespace Alura\DesignPattern\Venda;

use Alura\DesignPattern\Impostos\ICMS;
use Alura\DesignPattern\Impostos\Imposto;

class VendaProdutosFactory implements VendaFactory
{

    public int $pesoProduto;

    public function __construct(int $pesoProduto)
    {
        $this->pesoProduto = $pesoProduto;
    }

    public function criarVenda(): Venda
    {
        return new VendaProduto(new \DateTimeImmutable(), $this->pesoProduto);
    }

    public function pegarImposto(): Imposto
    {
        return new ICMS();
    }
}