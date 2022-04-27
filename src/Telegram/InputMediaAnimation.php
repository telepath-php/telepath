<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class InputMediaAnimation extends InputMedia
{
    public readonly string $type;

    public readonly string $media;

    /**
     * @var InputFile or String
     */
    public readonly InputFile|string $thumb;

    public readonly string $caption;

    public readonly string $parse_mode;

    /**
     * @var MessageEntity[]
     */
    public readonly array $caption_entities;

    public readonly int $width;

    public readonly int $height;

    public readonly int $duration;
}

