<?php

require_once "vendor/autoload.php";

use Alura\DesignPattern\Log\{StdOutLogManager, FileLogManager};

$logManager = new FileLogManager(__DIR__ . '/log');
$logManager->log('info', 'Testando log manager');

