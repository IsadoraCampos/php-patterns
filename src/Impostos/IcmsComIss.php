<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class IcmsComIss implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
       return (new ICMS())->calculaImposto($orcamento) + (new ISS())->calculaImposto($orcamento);
    }
}