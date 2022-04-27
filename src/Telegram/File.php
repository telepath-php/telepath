<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class File extends \Tii\Telepath\Type
{
    public string $file_id;

    public string $file_unique_id;

    public int $file_size;

    public string $file_path;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}

