<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Describes a transaction with a chat.
 */
class TransactionPartnerChat extends TransactionPartner
{
    /** Type of the transaction partner, always “chat” */
    public string $type = 'chat';

    /** Information about the chat */
    public Chat $chat;

    /** <em>Optional</em>. The gift sent to the chat by the bot */
    public ?Gift $gift = null;

    /**
     * @param  Chat  $chat  Information about the chat
     * @param  Gift  $gift  <em>Optional</em>. The gift sent to the chat by the bot
     */
    public static function make(Chat $chat, ?Gift $gift = null): static
    {
        return new static([
            'chat' => $chat,
            'gift' => $gift,
        ]);
    }
}
