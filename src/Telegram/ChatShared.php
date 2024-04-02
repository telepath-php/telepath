<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object contains information about a chat that was shared with the bot using a KeyboardButtonRequestChat button.
 */
class ChatShared extends Type
{
    /** Identifier of the request */
    public int $request_id;

    /** Identifier of the shared chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot may not have access to the chat and could be unable to use this identifier, unless the chat is already known to the bot by some other means. */
    public int $chat_id;

    /** <em>Optional</em>. Title of the chat, if the title was requested by the bot. */
    public ?string $title = null;

    /** <em>Optional</em>. Username of the chat, if the username was requested by the bot and available. */
    public ?string $username = null;

    /**
     * <em>Optional</em>. Available sizes of the chat photo, if the photo was requested by the bot
     *
     * @var PhotoSize[]
     */
    public ?array $photo = null;

    /**
     * @param  int  $request_id  Identifier of the request
     * @param  int  $chat_id  Identifier of the shared chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot may not have access to the chat and could be unable to use this identifier, unless the chat is already known to the bot by some other means.
     * @param  string  $title  <em>Optional</em>. Title of the chat, if the title was requested by the bot.
     * @param  string  $username  <em>Optional</em>. Username of the chat, if the username was requested by the bot and available.
     * @param  PhotoSize[]  $photo  <em>Optional</em>. Available sizes of the chat photo, if the photo was requested by the bot
     */
    public static function make(
        int $request_id,
        int $chat_id,
        ?string $title = null,
        ?string $username = null,
        ?array $photo = null,
    ): static {
        return new static([
            'request_id' => $request_id,
            'chat_id' => $chat_id,
            'title' => $title,
            'username' => $username,
            'photo' => $photo,
        ]);
    }
}
