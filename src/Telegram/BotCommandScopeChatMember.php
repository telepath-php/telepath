<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class BotCommandScopeChatMember extends BotCommandScope
{
    public string $type;

    /**
     * @var Integer or String
     */
    public int|string $chat_id;

    public int $user_id;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}

