<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

use Tii\Telepath\Types\Type;

/**
 * This object represents an incoming callback query from a callback button in an inline keyboard. If the button that originated the query was attached to a message sent by the bot, the field message will be present. If the button was attached to a message sent via the bot (in inline mode), the field inline_message_id will be present. Exactly one of the fields data or game_short_name will be present.
 */
class CallbackQuery extends Type
{
    /** Unique identifier for this query */
    public string $id;

    /** Sender */
    public User $from;

    /** Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in games. */
    public string $chat_instance;

    /** Optional. Message with the callback button that originated the query. Note that message content and message date will not be available if the message is too old */
    public ?Message $message = null;

    /** Optional. Identifier of the message sent via the bot in inline mode, that originated the query. */
    public ?string $inline_message_id = null;

    /** Optional. Data associated with the callback button. Be aware that a bad client can send arbitrary data in this field. */
    public ?string $data = null;

    /** Optional. Short name of a Game to be returned, serves as the unique identifier for the game */
    public ?string $game_short_name = null;

    /**
     * @param string $id Unique identifier for this query
     * @param User $from Sender
     * @param string $chat_instance Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in games.
     * @param Message $message Optional. Message with the callback button that originated the query. Note that message content and message date will not be available if the message is too old
     * @param string $inline_message_id Optional. Identifier of the message sent via the bot in inline mode, that originated the query.
     * @param string $data Optional. Data associated with the callback button. Be aware that a bad client can send arbitrary data in this field.
     * @param string $game_short_name Optional. Short name of a Game to be returned, serves as the unique identifier for the game
     */
    public static function make(
        string $id,
        User $from,
        string $chat_instance,
        ?Message $message = null,
        ?string $inline_message_id = null,
        ?string $data = null,
        ?string $game_short_name = null
    ): static {
        return new static([
            'id' => $id,
            'from' => $from,
            'chat_instance' => $chat_instance,
            'message' => $message,
            'inline_message_id' => $inline_message_id,
            'data' => $data,
            'game_short_name' => $game_short_name,
        ]);
    }
}
