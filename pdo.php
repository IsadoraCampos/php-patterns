<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\PdoConnection;

$pdoConexao = PdoConnection::getInstance('sqlite::memory:');

$pdoConexao2 = PdoConnection::getInstance('sqlite::memory:');

var_dump($pdoConexao, $pdoConexao2);

