<?php

namespace Tii\Telepath;

use GuzzleHttp\Psr7\Stream;
use Psr\Http\Message\StreamInterface;
use Tii\Telepath\Exceptions\InputFileException;

/**
 * This object represents the contents of a file to be uploaded. Must be posted using multipart/form-data in the usual way that files are uploaded via the browser.
 */
class InputFile
{
    public function __construct(
        protected StreamInterface|string $contents
    ) {
    }

    public static function fromFileId(string $fileId): static
    {
        return new static($fileId);
    }

    public static function fromUrl(string $url): static
    {
        if (! str_starts_with($url, 'http')) {
            throw new InputFileException('Invalid URL.');
        }

        return new static($url);
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

    public function getContents(): StreamInterface|string
    {
        return $this->contents;
    }
}
