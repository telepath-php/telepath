<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object contains information about the users whose identifiers were shared with the bot using a KeyboardButtonRequestUsers button.
 */
class UsersShared extends Type
{
    /** Identifier of the request */
    public int $request_id;

    /**
     * Identifiers of the shared users. These numbers may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting them. But they have at most 52 significant bits, so 64-bit integers or double-precision float types are safe for storing these identifiers. The bot may not have access to the users and could be unable to use these identifiers, unless the users are already known to the bot by some other means.
     *
     * @var int[]
     */
    public array $user_ids;

    /**
     * @param  int  $request_id  Identifier of the request
     * @param  int[]  $user_ids  Identifiers of the shared users. These numbers may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting them. But they have at most 52 significant bits, so 64-bit integers or double-precision float types are safe for storing these identifiers. The bot may not have access to the users and could be unable to use these identifiers, unless the users are already known to the bot by some other means.
     */
    public static function make(int $request_id, array $user_ids): static
    {
        return new static([
            'request_id' => $request_id,
            'user_ids' => $user_ids,
        ]);
    }
}
