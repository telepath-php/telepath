<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object is received when messages are deleted from a connected business account.
 */
class BusinessMessagesDeleted extends Type
{
    /** Unique identifier of the business connection */
    public string $business_connection_id;

    /** Information about a chat in the business account. The bot may not have access to the chat or the corresponding user. */
    public Chat $chat;

    /**
     * A JSON-serialized list of identifiers of deleted messages in the chat of the business account
     *
     * @var int[]
     */
    public array $message_ids;

    /**
     * @param  string  $business_connection_id  Unique identifier of the business connection
     * @param  Chat  $chat  Information about a chat in the business account. The bot may not have access to the chat or the corresponding user.
     * @param  int[]  $message_ids  A JSON-serialized list of identifiers of deleted messages in the chat of the business account
     */
    public static function make(string $business_connection_id, Chat $chat, array $message_ids): static
    {
        return new static([
            'business_connection_id' => $business_connection_id,
            'chat' => $chat,
            'message_ids' => $message_ids,
        ]);
    }
}
