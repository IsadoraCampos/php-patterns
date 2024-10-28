<?php

namespace Alura\DesignPattern\Log;

class StdOutLogWritter implements LogWritter
{
    public function escreve(string $mensagemFormatada) : void
    {
        echo $mensagemFormatada;
    }
}