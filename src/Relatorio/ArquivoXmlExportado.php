<?php

namespace Alura\DesignPattern\Relatorio;

class ArquivoXmlExportado implements ArquivoExportado
{

    private string $nomeElemento;

    public function __construct(string $nomeElemento)
    {
        $this->nomeElemento = $nomeElemento;
    }

    public function salvar(ConteudoExportado $conteudoExportado): string
    {
        $elementoXml = new \SimpleXMLElement("<{$this->nomeElemento}/>");
        foreach ($conteudoExportado->conteudo() as $item => $valor) {
            $elementoXml->addChild($item, $valor);
        }

        $caminhoArquivo = tempnam(sys_get_temp_dir(), 'xml');
        $elementoXml->asXML($caminhoArquivo);

        return $caminhoArquivo;
    }
}