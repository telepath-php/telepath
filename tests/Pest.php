<?php

use Dotenv\Dotenv;

// Load .env
$dotenv = Dotenv::createImmutable(__DIR__.'/../');
$dotenv->safeLoad();
$dotenv->required('TELEGRAM_API_TOKEN')->notEmpty();

uses()->group('adapter')->in('AdapterTests');

uses()->group('api')->in('ApiTests');

expect()->extend('toHaveAtLeastCount', function (int $minLength) {
    return $this->toBeArray()
        ->and(count($this->value))->toBeGreaterThanOrEqual($minLength);
});
