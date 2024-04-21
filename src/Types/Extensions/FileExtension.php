<?php

namespace Telepath\Types\Extensions;

use Psr\Http\Message\ResponseInterface;
use Telepath\Files\ClientType;
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

    private function download(?string $path = null): ResponseInterface
    {
        $client = $this->bot->httpClient(ClientType::FILE);

        return $client->get($this->file_path, [
            'sink' => $path,
        ]);
    }
}
