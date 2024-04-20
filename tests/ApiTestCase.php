<?php

namespace Tests;

use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Process\Process;
use Telepath\Bot;
use Telepath\Telegram\Update;

class ApiTestCase extends TestCase
{
    public static ?Process $process = null;

    protected Bot $bot;

    protected Client $client;

    public static function setUpBeforeClass(): void
    {
        static::$process = new Process(['npm', 'start'], __DIR__.'/../mtproto/');
        static::$process->start();

        static::$process->waitUntil(function ($type, $output) {
            return str_contains($output, 'Telegram ready.');
        });
    }

    public static function tearDownAfterClass(): void
    {
        static::client()->get('exit');

        static::$process->wait();
    }

    protected function setUp(): void
    {
        $this->bot = new Bot($_SERVER['TELEGRAM_API_TOKEN']);
        $this->client = static::client();
    }

    public static function client(): Client
    {
        return new Client([
            'base_uri' => 'http://localhost:3000',
        ]);
    }

    public function nextUpdate(int $timeout = 10): ?Update
    {
        return $this->bot->getUpdates(limit: 1, timeout: $timeout)[0] ?? null;
    }
}
