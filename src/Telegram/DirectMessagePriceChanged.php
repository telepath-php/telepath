<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes a service message about a change in the price of direct messages sent to a channel chat.
 */
class DirectMessagePriceChanged extends Type
{
    /** <em>True</em>, if direct messages are enabled for the channel chat; false otherwise */
    public bool $are_direct_messages_enabled;

    /** <em>Optional</em>. The new number of Telegram Stars that must be paid by users for each direct message sent to the channel. Does not apply to users who have been exempted by administrators. Defaults to 0. */
    public ?int $direct_message_star_count = null;

    /**
     * @param  bool  $are_direct_messages_enabled  <em>True</em>, if direct messages are enabled for the channel chat; false otherwise
     * @param  int  $direct_message_star_count  <em>Optional</em>. The new number of Telegram Stars that must be paid by users for each direct message sent to the channel. Does not apply to users who have been exempted by administrators. Defaults to 0.
     */
    public static function make(bool $are_direct_messages_enabled, ?int $direct_message_star_count = null): static
    {
        return new static([
            'are_direct_messages_enabled' => $are_direct_messages_enabled,
            'direct_message_star_count' => $direct_message_star_count,
        ]);
    }
}
