<?php

namespace Alura\DesignPattern\Relatorio;

use Alura\DesignPattern\Orcamento;

class OrcamentoXML
{
    public function exporta(Orcamento $orcamento) : string
    {
        $elementoOrcamento = new \SimpleXMLElement('<orcamento/>');
        $elementoOrcamento->addChild('valor', $orcamento->valor);
        $elementoOrcamento->addChild('quantidade-itens', $orcamento->quantidadeItens);

        return $elementoOrcamento->asXML();
    }
}