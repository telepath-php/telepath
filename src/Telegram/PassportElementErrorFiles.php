<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class PassportElementErrorFiles extends PassportElementError
{
    public string $source;

    public string $type;

    /**
     * @var string[]
     */
    public array $file_hashes;

    public string $message;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}

