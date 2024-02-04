<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents reaction changes on a message with anonymous reactions.
 */
class MessageReactionCountUpdated extends Type
{
    /** The chat containing the message */
    public Chat $chat;

    /** Unique message identifier inside the chat */
    public int $message_id;

    /** Date of the change in Unix time */
    public int $date;

    /**
     * List of reactions that are present on the message
     *
     * @var ReactionCount[]
     */
    public array $reactions;

    /**
     * @param  Chat  $chat  The chat containing the message
     * @param  int  $message_id  Unique message identifier inside the chat
     * @param  int  $date  Date of the change in Unix time
     * @param  ReactionCount[]  $reactions  List of reactions that are present on the message
     */
    public static function make(Chat $chat, int $message_id, int $date, array $reactions): static
    {
        return new static([
            'chat' => $chat,
            'message_id' => $message_id,
            'date' => $date,
            'reactions' => $reactions,
        ]);
    }
}
