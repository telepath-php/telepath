<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class InputMediaAudio extends InputMedia
{
    public string $type;

    public string $media;

    /**
     * @var InputFile or String
     */
    public InputFile|string $thumb;

    public string $caption;

    public string $parse_mode;

    /**
     * @var MessageEntity[]
     */
    public array $caption_entities;

    public int $duration;

    public string $performer;

    public string $title;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}

