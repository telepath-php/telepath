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
     * Information about users shared with the bot.
     *
     * @var SharedUser[]
     */
    public array $users;

    /**
     * @param  int  $request_id  Identifier of the request
     * @param  SharedUser[]  $users  Information about users shared with the bot.
     */
    public static function make(int $request_id, array $users): static
    {
        return new static([
            'request_id' => $request_id,
            'users' => $users,
        ]);
    }
}
