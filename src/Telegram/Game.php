<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class Game extends \Tii\Telepath\Type
{
    public string $title;

    public string $description;

    /**
     * @var PhotoSize[]
     */
    public array $photo;

    public string $text;

    /**
     * @var MessageEntity[]
     */
    public array $text_entities;

    public Animation $animation;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}

