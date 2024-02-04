<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents an incoming callback query from a callback button in an inline keyboard. If the button that originated the query was attached to a message sent by the bot, the field <em>message</em> will be present. If the button was attached to a message sent via the bot (in inline mode), the field <em>inline_message_id</em> will be present. Exactly one of the fields <em>data</em> or <em>game_short_name</em> will be present.
 */
class CallbackQuery extends Type
{
    /** Unique identifier for this query */
    public string $id;

    /** Sender */
    public User $from;

    /** Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in <a href="https://core.telegram.org/bots/api#games">games</a>. */
    public string $chat_instance;

    /** <em>Optional</em>. Message sent by the bot with the callback button that originated the query */
    public ?MaybeInaccessibleMessage $message = null;

    /** <em>Optional</em>. Identifier of the message sent via the bot in inline mode, that originated the query. */
    public ?string $inline_message_id = null;

    /** <em>Optional</em>. Data associated with the callback button. Be aware that the message originated the query can contain no callback buttons with this data. */
    public ?string $data = null;

    /** <em>Optional</em>. Short name of a <a href="https://core.telegram.org/bots/api#games">Game</a> to be returned, serves as the unique identifier for the game */
    public ?string $game_short_name = null;

    /**
     * @param  string  $id  Unique identifier for this query
     * @param  User  $from  Sender
     * @param  string  $chat_instance  Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in <a href="https://core.telegram.org/bots/api#games">games</a>.
     * @param  MaybeInaccessibleMessage  $message  <em>Optional</em>. Message sent by the bot with the callback button that originated the query
     * @param  string  $inline_message_id  <em>Optional</em>. Identifier of the message sent via the bot in inline mode, that originated the query.
     * @param  string  $data  <em>Optional</em>. Data associated with the callback button. Be aware that the message originated the query can contain no callback buttons with this data.
     * @param  string  $game_short_name  <em>Optional</em>. Short name of a <a href="https://core.telegram.org/bots/api#games">Game</a> to be returned, serves as the unique identifier for the game
     */
    public static function make(
        string $id,
        User $from,
        string $chat_instance,
        ?MaybeInaccessibleMessage $message = null,
        ?string $inline_message_id = null,
        ?string $data = null,
        ?string $game_short_name = null,
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
