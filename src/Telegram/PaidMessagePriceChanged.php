<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes a service message about a change in the price of paid messages within a chat.
 */
class PaidMessagePriceChanged extends Type
{
    /** The new number of Telegram Stars that must be paid by non-administrator users of the supergroup chat for each sent message */
    public int $paid_message_star_count;

    /**
     * @param  int  $paid_message_star_count  The new number of Telegram Stars that must be paid by non-administrator users of the supergroup chat for each sent message
     */
    public static function make(int $paid_message_star_count): static
    {
        return new static([
            'paid_message_star_count' => $paid_message_star_count,
        ]);
    }
}
