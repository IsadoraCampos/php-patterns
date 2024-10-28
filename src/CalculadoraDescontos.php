<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Descontos\DescontoMais5Itens;
use Alura\DesignPattern\Descontos\DescontosMais500Reais;
use Alura\DesignPattern\Descontos\SemDesconto;

class CalculadoraDescontos
{
    public function calculaDesconto(Orcamento $orcamento) : float
    {
       $cadeiaDeDescontos = new DescontosMais500Reais(new DescontoMais5Itens(new SemDesconto()));
       $descontoCalculdao = $cadeiaDeDescontos->calculaDesconto($orcamento);
       $logDesconto = new LogDesconto();
       $logDesconto->informar($descontoCalculdao);
       return $descontoCalculdao;
    }
}