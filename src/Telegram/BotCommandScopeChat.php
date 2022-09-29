<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents the scope of bot commands, covering a specific chat.
 */
class BotCommandScopeChat extends BotCommandScope
{
    /** Scope type, must be chat */
    public string $type = 'chat';

    /** Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername) */
    public int|string $chat_id;

    /**
     * @param int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     */
    public static function make(int|string $chat_id): static
    {
        return new static([
            'chat_id' => $chat_id,
        ]);
    }
}
