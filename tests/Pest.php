<?php

use Dotenv\Dotenv;
use Telepath\Bot;

// Load .env
$dotenv = Dotenv::createImmutable(__DIR__.'/../', '.env.testing');
$dotenv->safeLoad();
$dotenv->required('TELEGRAM_API_TOKEN')->notEmpty();

// Create Bot instance for ApiTests
uses()->beforeEach(function () {
    $this->bot = new Bot($_SERVER['TELEGRAM_API_TOKEN']);
})->group('api')->in('ApiTests');
