<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object contains information about the user whose identifier was shared with the bot using a KeyboardButtonRequestUser button.
 */
class UserShared extends Type
{
    /** Identifier of the request */
    public int $request_id;

    /** Identifier of the shared user. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot may not have access to the user and could be unable to use this identifier, unless the user is already known to the bot by some other means. */
    public int $user_id;

    /**
     * @param int $request_id Identifier of the request
     * @param int $user_id Identifier of the shared user. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot may not have access to the user and could be unable to use this identifier, unless the user is already known to the bot by some other means.
     */
    public static function make(int $request_id, int $user_id): static
    {
        return new static([
            'request_id' => $request_id,
            'user_id' => $user_id,
        ]);
    }
}
