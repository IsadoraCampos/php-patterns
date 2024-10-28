<?php

namespace Alura\DesignPattern\Log;

class StdOutLogManager extends LogManager
{
    public function criarLogWritter(): logWritter
    {
        return new StdOutLogWritter();
    }
}