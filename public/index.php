<?php

require __DIR__ . '/../vendor/autoload.php';

use Esoftuz\Framework\App;
use Esoftuz\Framework\Exceptions\HttpNotFoundException;

try {
    $app = new App(__DIR__);
    $app->run();
} catch (HttpNotFoundException|Exception|Error|Throwable $e) {
    echo abort($e->getCode(), $e->getMessage());
}