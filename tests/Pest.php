<?php

use Dotenv\Dotenv;

// Load .env
$dotenv = Dotenv::createImmutable(__DIR__.'/../', '.env.testing');
$dotenv->safeLoad();
$dotenv->required('TELEGRAM_API_TOKEN')->notEmpty();

uses()->group('adapter')->in('AdapterTests');

uses()->group('api')->in('ApiTests');
