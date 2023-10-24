<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents an incoming inline query. When the user sends an empty query, your bot could return some default or trending results.
 */
class InlineQuery extends Type
{
    /** Unique identifier for this query */
    public string $id;

    /** Sender */
    public User $from;

    /** Text of the query (up to 256 characters) */
    public string $query;

    /** Offset of the results to be returned, can be controlled by the bot */
    public string $offset;

    /** <em>Optional</em>. Type of the chat from which the inline query was sent. Can be either “sender” for a private chat with the inline query sender, “private”, “group”, “supergroup”, or “channel”. The chat type should be always known for requests sent from official clients and most third-party clients, unless the request was sent from a secret chat */
    public ?string $chat_type = null;

    /** <em>Optional</em>. Sender location, only for bots that request user location */
    public ?Location $location = null;

    /**
     * @param  string  $id Unique identifier for this query
     * @param  User  $from Sender
     * @param  string  $query Text of the query (up to 256 characters)
     * @param  string  $offset Offset of the results to be returned, can be controlled by the bot
     * @param  string  $chat_type <em>Optional</em>. Type of the chat from which the inline query was sent. Can be either “sender” for a private chat with the inline query sender, “private”, “group”, “supergroup”, or “channel”. The chat type should be always known for requests sent from official clients and most third-party clients, unless the request was sent from a secret chat
     * @param  Location  $location <em>Optional</em>. Sender location, only for bots that request user location
     */
    public static function make(
        string $id,
        User $from,
        string $query,
        string $offset,
        string $chat_type = null,
        Location $location = null,
    ): static {
        return new static([
            'id' => $id,
            'from' => $from,
            'query' => $query,
            'offset' => $offset,
            'chat_type' => $chat_type,
            'location' => $location,
        ]);
    }
}
