<?php

namespace Alura\DesignPattern\Log;

class FileLogManager extends LogManager
{
    private string $caminhoArquivo;

    public function __construct(string $caminhoArquivo)
    {
        $this->caminhoArquivo = $caminhoArquivo;
    }

    public function criarLogWritter(): logWritter
    {
        return new FileLogWritter($this->caminhoArquivo);
    }
}