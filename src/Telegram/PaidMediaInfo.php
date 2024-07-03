<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes the paid media added to a message.
 */
class PaidMediaInfo extends Type
{
    /** The number of Telegram Stars that must be paid to buy access to the media */
    public int $star_count;

    /**
     * Information about the paid media
     *
     * @var PaidMedia[]
     */
    public array $paid_media;

    /**
     * @param  int  $star_count  The number of Telegram Stars that must be paid to buy access to the media
     * @param  PaidMedia[]  $paid_media  Information about the paid media
     */
    public static function make(int $star_count, array $paid_media): static
    {
        return new static([
            'star_count' => $star_count,
            'paid_media' => $paid_media,
        ]);
    }
}
