<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class Game extends \Tii\Telepath\Type
{
    public readonly string $title;

    public readonly string $description;

    /**
     * @var PhotoSize[]
     */
    public readonly array $photo;

    public readonly string $text;

    /**
     * @var MessageEntity[]
     */
    public readonly array $text_entities;

    public readonly Animation $animation;
}

