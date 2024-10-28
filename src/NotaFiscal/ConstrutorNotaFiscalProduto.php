<?php

namespace Alura\DesignPattern\NotaFiscal;

class ConstrutorNotaFiscalProduto extends ConstrutorNotaFiscal
{

    public function constroiNota(): NotaFiscal
    {
       $valorNotaFiscal = $this->notaFiscal->valor();
       $this->notaFiscal->valorImpostos = $valorNotaFiscal * 0.02;

       return $this->notaFiscal;
    }
}