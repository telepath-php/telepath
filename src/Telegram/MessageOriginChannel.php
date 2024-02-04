<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * The message was originally sent to a channel chat.
 */
class MessageOriginChannel extends MessageOrigin
{
    /** Type of the message origin, always “channel” */
    public string $type = 'channel';

    /** Channel chat to which the message was originally sent */
    public Chat $chat;

    /** Unique message identifier inside the chat */
    public int $message_id;

    /** <em>Optional</em>. Signature of the original post author */
    public ?string $author_signature = null;

    /**
     * @param  int  $date  Date the message was sent originally in Unix time
     * @param  Chat  $chat  Channel chat to which the message was originally sent
     * @param  int  $message_id  Unique message identifier inside the chat
     * @param  string  $author_signature  <em>Optional</em>. Signature of the original post author
     */
    public static function make(int $date, Chat $chat, int $message_id, ?string $author_signature = null): static
    {
        return new static([
            'date' => $date,
            'chat' => $chat,
            'message_id' => $message_id,
            'author_signature' => $author_signature,
        ]);
    }
}
