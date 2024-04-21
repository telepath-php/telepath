<?php

namespace Telepath\Files;

use GuzzleHttp\Psr7\Stream;
use Psr\Http\Message\StreamInterface;
use Telepath\Exceptions\InputFileException;

/**
 * This object represents the contents of a file to be uploaded. Must be posted using multipart/form-data in the usual way that files are uploaded via the browser.
 */
class InputFile
{
    public function __construct(
        protected StreamInterface $contents
    ) {
    }

    public static function fromFile(string $file): static
    {
        if (! file_exists($file)) {
            throw new InputFileException('File does not exists.');
        }

        return static::fromResource(fopen($file, 'r'));
    }

    public static function fromResource($resource): static
    {
        if (get_resource_type($resource) !== 'stream') {
            throw new InputFileException('Invalid resource type.');
        }

        return static::fromStream(new Stream($resource));
    }

    public static function fromStream(StreamInterface $stream): static
    {
        return new static($stream);
    }

    public function getContents(): StreamInterface
    {
        return $this->contents;
    }
}
