<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class PhotoSize extends \Tii\Telepath\Type
{
    public string $file_id;

    public string $file_unique_id;

    public int $width;

    public int $height;

    public int $file_size;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}

