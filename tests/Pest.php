<?php

use Dotenv\Dotenv;
use Tests\ApiTestCase;

// Load .env
$dotenv = Dotenv::createImmutable(__DIR__.'/../', '.env.testing');
$dotenv->safeLoad();
$dotenv->required('TELEGRAM_API_TOKEN')->notEmpty();

uses()->group('adapter')->in('AdapterTests');

uses(ApiTestCase::class)->group('api')->in('ApiTests');
