<?php

namespace Alura\DesignPattern\NotaFiscal;

use Alura\DesignPattern\ItemOrcamento;

class NotaFiscal
{
    public string $cnpjEmpresa;
    public string $razaoSocialEmpresa;
    public array $itens;
    public string $obs;
    public \DateTimeInterface $dataEmissao;
    public float $valorImpostos;

   /* public function __construct(string $cnpjEmpresa, string $razaoSocialEmpresa, array $itens, string $obs, \DateTimeInterface $dataEmissao, float $valorImpostos)
    {
        $this->cnpjEmpresa = $cnpjEmpresa;
        $this->razaoSocialEmpresa = $razaoSocialEmpresa;
        $this->itens = $itens;
        $this->obs = $obs;
        $this->dataEmissao = $dataEmissao;
        $this->valorImpostos = $valorImpostos;
    }  //alt + insert cria o construtor */


    public function valor() : float
    {
        return array_reduce($this->itens,
            function (float $valorAcum, ItemOrcamento $itemAtual){
            return $valorAcum + $itemAtual->valor;
            },
            0);
    }

    public function clonar(): NotaFiscal
    {
        $cloneNotaFiscal = new NotaFiscal();
        $cloneNotaFiscal->cnpjEmpresa = $this->cnpjEmpresa;
        $cloneNotaFiscal->razaoSocialEmpresa = $this->razaoSocialEmpresa;
        $cloneNotaFiscal->itens = $this->itens;
        $cloneNotaFiscal->obs = $this->obs;
        $cloneNotaFiscal->dataEmissao = $this->dataEmissao;
        $cloneNotaFiscal->valorImpostos = $this->valorImpostos;
        return $cloneNotaFiscal;
    }

    public function __clone(): void
    {
        $this->dataEmissao = new \DateTimeImmutable();
    }  //depois de eu clonar no arquivo clone.php, o PHP chama este método mágico por debaixo dos panos e muda o dia
}