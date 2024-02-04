<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a boost added to a chat or changed.
 */
class ChatBoostUpdated extends Type
{
    /** Chat which was boosted */
    public Chat $chat;

    /** Infomation about the chat boost */
    public ChatBoost $boost;

    /**
     * @param  Chat  $chat Chat which was boosted
     * @param  ChatBoost  $boost Infomation about the chat boost
     */
    public static function make(Chat $chat, ChatBoost $boost): static
    {
        return new static([
            'chat' => $chat,
            'boost' => $boost,
        ]);
    }
}
