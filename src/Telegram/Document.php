<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class Document extends \Tii\Telepath\Type
{
    public string $file_id;

    public string $file_unique_id;

    public PhotoSize $thumb;

    public string $file_name;

    public string $mime_type;

    public int $file_size;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}

