<?php

namespace Alura\DesignPattern\Venda;

use DateTimeInterface;

class VendaServico extends Venda
{
    public string $nomePrestador;

    public function __construct(DateTimeInterface $dataRealizada, string $nomePrestador)
    {
        parent::__construct($dataRealizada);
        $this->nomePrestador = $nomePrestador;
    }
}