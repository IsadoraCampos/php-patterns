<?php

namespace Alura\DesignPattern\Http;

class ReactPHPHttpAdapter implements HttpAdapter
{

    public function post(string $url, array $data = []): void
    {
        echo "Registro com ReactPHP". PHP_EOL;
    }
}