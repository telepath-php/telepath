<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * This object describes a message that was deleted or is otherwise inaccessible to the bot.
 */
class InaccessibleMessage extends MaybeInaccessibleMessage
{
    /** Always 0. The field can be used to differentiate regular and inaccessible messages. */
    public int $date = 0;

    /**
     * @param  Chat  $chat Chat the message belonged to
     * @param  int  $message_id Unique message identifier inside the chat
     * @param  int  $date Always 0. The field can be used to differentiate regular and inaccessible messages.
     */
    public static function make(Chat $chat, int $message_id, int $date): static
    {
        return new static([
            'chat' => $chat,
            'message_id' => $message_id,
            'date' => $date,
        ]);
    }
}
