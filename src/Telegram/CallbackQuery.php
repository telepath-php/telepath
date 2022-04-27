<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class CallbackQuery extends \Tii\Telepath\Type
{
    public string $id;

    public User $from;

    public Message $message;

    public string $inline_message_id;

    public string $chat_instance;

    public string $data;

    public string $game_short_name;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}

