<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object contains information about a paid media purchase.
 */
class PaidMediaPurchased extends Type
{
    /** User who purchased the media */
    public User $from;

    /** Bot-specified paid media payload */
    public string $paid_media_payload;

    /**
     * @param  User  $from  User who purchased the media
     * @param  string  $paid_media_payload  Bot-specified paid media payload
     */
    public static function make(User $from, string $paid_media_payload): static
    {
        return new static([
            'from' => $from,
            'paid_media_payload' => $paid_media_payload,
        ]);
    }
}
