<?php

namespace Alura\DesignPattern\Venda;

use DateTimeInterface;

class VendaProduto extends Venda
{
    public int $pesoProduto;

    public function __construct(DateTimeInterface $dataRealizada, int $pesoProduto)
    {
        parent::__construct($dataRealizada);
        $this->pesoProduto = $pesoProduto;
    }
}