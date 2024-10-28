<?php

namespace Alura\DesignPattern;

class PdoConnection extends \PDO //PDO facilita a comunicação entre um projeto e um Banco de Dados
{
    private static ?self $instance = null;

    public function __construct($dns)
    {
        parent::__construct($dns);
    }

    public static function getInstance($dns, $username = null, $passwd = null, $options = null): self {
        if (is_null(self::$instance)) {
            self::$instance = new static($dns, $username = null, $passwd = null, $options = null);
        }
        return self::$instance;
    }
}