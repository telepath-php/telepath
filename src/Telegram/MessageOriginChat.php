<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * The message was originally sent on behalf of a chat to a group chat.
 */
class MessageOriginChat extends MessageOrigin
{
    /** Type of the message origin, always “chat” */
    public string $type = 'chat';

    /** Chat that sent the message originally */
    public Chat $sender_chat;

    /** <em>Optional</em>. For messages originally sent by an anonymous chat administrator, original message author signature */
    public ?string $author_signature = null;

    /**
     * @param  int  $date Date the message was sent originally in Unix time
     * @param  Chat  $sender_chat Chat that sent the message originally
     * @param  string  $author_signature <em>Optional</em>. For messages originally sent by an anonymous chat administrator, original message author signature
     */
    public static function make(int $date, Chat $sender_chat, string $author_signature = null): static
    {
        return new static([
            'date' => $date,
            'sender_chat' => $sender_chat,
            'author_signature' => $author_signature,
        ]);
    }
}
