<?php

namespace Alura\DesignPattern\Relatorio;
use Alura\DesignPattern\Orcamento;

class OrcamentoZip
{
    public function exporta(Orcamento $orcamento) {
        $caminhoArquivo = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'orcamento.zip'; //a função sys retorna um caminho temporario de diretório
        $zip = new \ZipArchive();
        $zip->open($caminhoArquivo, \ZipArchive::CREATE); // como o arquivo ainda não existe, ele pede para criar
        $zip->addFromString('orcamento.serial', serialize($orcamento)); //orcamento.serial é o nome do arquivo que vai ter as info
        //Serialização é o processo de converter um objeto ou estrutura de dados em um
        // formato que possa ser armazenado ou transmitido
        $zip->close();
    }
}