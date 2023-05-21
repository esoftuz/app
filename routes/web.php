<?php

use Esoftuz\Framework\Router\Web\Router;
use Controllers\HomeController;
use Controllers\TestController;

Router::add('', [HomeController::class, 'index']);
Router::add('test', [TestController::class, 'test']);