<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents the scope of bot commands, covering a specific member of a group or supergroup chat.
 */
class BotCommandScopeChatMember extends BotCommandScope
{
    /** Scope type, must be <em>chat_member</em> */
    public string $type = 'chat_member';

    /** Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername) */
    public int|string $chat_id;

    /** Unique identifier of the target user */
    public int $user_id;

    /**
     * @param  int|string  $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @param  int  $user_id Unique identifier of the target user
     */
    public static function make(int|string $chat_id, int $user_id): static
    {
        return new static([
            'chat_id' => $chat_id,
            'user_id' => $user_id,
        ]);
    }
}
