<?php

use Esoftuz\Framework\Router\Console\Router;
use Controllers\TestController;

Router::add('test', [TestController::class, 'console']);