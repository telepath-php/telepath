<?php

namespace Telepath\Types\Extensions;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;
use Telepath\Bot;
use Telepath\Telegram\File;

/**
 * @mixin File
 */
trait FileExtension
{

    public function saveTo(string $path): void
    {
        $this->download($path);
    }

    public function getContents(): string
    {
        $response = $this->download();
        return $response->getBody()->getContents();
    }

    private function download(string $path = null): ResponseInterface
    {
        $baseUri = Bot::DEFAULT_API_SERVER_URL;
        $uri = "{$baseUri}/file/bot{$this->bot->token}/{$this->file_path}";

        $options = [];

        if (! is_null($path)) {
            $options['sink'] = $path;
        }

        $client = new Client();
        return $client->get($uri, $options);
    }

}