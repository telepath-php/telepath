<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes an inline message to be sent by a user of a Mini App.
 */
class PreparedInlineMessage extends Type
{
    /** Unique identifier of the prepared message */
    public string $id;

    /** Expiration date of the prepared message, in Unix time. Expired prepared messages can no longer be used */
    public int $expiration_date;

    /**
     * @param  string  $id  Unique identifier of the prepared message
     * @param  int  $expiration_date  Expiration date of the prepared message, in Unix time. Expired prepared messages can no longer be used
     */
    public static function make(string $id, int $expiration_date): static
    {
        return new static([
            'id' => $id,
            'expiration_date' => $expiration_date,
        ]);
    }
}
