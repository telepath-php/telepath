<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class PassportFile extends \Tii\Telepath\Type
{
    public string $file_id;

    public string $file_unique_id;

    public int $file_size;

    public int $file_date;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}

