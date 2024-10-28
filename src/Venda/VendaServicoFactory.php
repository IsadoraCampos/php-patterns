<?php

namespace Alura\DesignPattern\Venda;

use Alura\DesignPattern\Impostos\Imposto;
use Alura\DesignPattern\Impostos\ISS;

class VendaServicoFactory implements VendaFactory
{
    public string $nomePrestador;

    public function __construct(string $nomePrestador)
    {
        $this->nomePrestador = $nomePrestador;
    }

    public function criarVenda(): Venda
    {
        return new VendaServico(new \DateTimeImmutable(),$this->nomePrestador);
    }

    public function pegarImposto(): Imposto
    {
        return new ISS();
    }
}