<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class InputMediaPhoto extends InputMedia
{
    public string $type;

    public string $media;

    public string $caption;

    public string $parse_mode;

    /**
     * @var MessageEntity[]
     */
    public array $caption_entities;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}

