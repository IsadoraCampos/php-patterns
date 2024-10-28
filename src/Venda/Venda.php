<?php

namespace Alura\DesignPattern\Venda;

use DateTimeInterface;

abstract class Venda
{
    public \DateTimeInterface $dataRealizada;

    public function __construct(DateTimeInterface $dataRealizada)
    {
        $this->dataRealizada = $dataRealizada;
    }
}