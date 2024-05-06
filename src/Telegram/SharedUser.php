<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object contains information about a user that was shared with the bot using a KeyboardButtonRequestUsers button.
 */
class SharedUser extends Type
{
    /** Identifier of the shared user. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so 64-bit integers or double-precision float types are safe for storing these identifiers. The bot may not have access to the user and could be unable to use this identifier, unless the user is already known to the bot by some other means. */
    public int $user_id;

    /** <em>Optional</em>. First name of the user, if the name was requested by the bot */
    public ?string $first_name = null;

    /** <em>Optional</em>. Last name of the user, if the name was requested by the bot */
    public ?string $last_name = null;

    /** <em>Optional</em>. Username of the user, if the username was requested by the bot */
    public ?string $username = null;

    /**
     * <em>Optional</em>. Available sizes of the chat photo, if the photo was requested by the bot
     *
     * @var PhotoSize[]
     */
    public ?array $photo = null;

    /**
     * @param  int  $user_id  Identifier of the shared user. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so 64-bit integers or double-precision float types are safe for storing these identifiers. The bot may not have access to the user and could be unable to use this identifier, unless the user is already known to the bot by some other means.
     * @param  string  $first_name  <em>Optional</em>. First name of the user, if the name was requested by the bot
     * @param  string  $last_name  <em>Optional</em>. Last name of the user, if the name was requested by the bot
     * @param  string  $username  <em>Optional</em>. Username of the user, if the username was requested by the bot
     * @param  PhotoSize[]  $photo  <em>Optional</em>. Available sizes of the chat photo, if the photo was requested by the bot
     */
    public static function make(
        int $user_id,
        ?string $first_name = null,
        ?string $last_name = null,
        ?string $username = null,
        ?array $photo = null,
    ): static {
        return new static([
            'user_id' => $user_id,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'username' => $username,
            'photo' => $photo,
        ]);
    }
}
