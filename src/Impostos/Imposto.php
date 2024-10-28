<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

abstract class Imposto
{
    private ?Imposto $imposto;
    public function __construct(Imposto $imposto = null)
    {
        $this->imposto = $imposto;
    }

    abstract protected function realizaCalculoEspecifico(Orcamento $orcamento) : float;

   public function calculaImposto(Orcamento $orcamento) : float {
       return $this->realizaCalculoEspecifico($orcamento) + $this->realizaCalculoOutroImposto($orcamento);
   }

   private function realizaCalculoOutroImposto(Orcamento $orcamento) : float
   {
       return $this->imposto === null ? 0 : $this->imposto->calculaImposto($orcamento);
   }
}