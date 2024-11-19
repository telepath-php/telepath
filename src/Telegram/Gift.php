<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a gift that can be sent by the bot.
 */
class Gift extends Type
{
    /** Unique identifier of the gift */
    public string $id;

    /** The sticker that represents the gift */
    public Sticker $sticker;

    /** The number of Telegram Stars that must be paid to send the sticker */
    public int $star_count;

    /** <em>Optional</em>. The total number of the gifts of this type that can be sent; for limited gifts only */
    public ?int $total_count = null;

    /** <em>Optional</em>. The number of remaining gifts of this type that can be sent; for limited gifts only */
    public ?int $remaining_count = null;

    /**
     * @param  string  $id  Unique identifier of the gift
     * @param  Sticker  $sticker  The sticker that represents the gift
     * @param  int  $star_count  The number of Telegram Stars that must be paid to send the sticker
     * @param  int  $total_count  <em>Optional</em>. The total number of the gifts of this type that can be sent; for limited gifts only
     * @param  int  $remaining_count  <em>Optional</em>. The number of remaining gifts of this type that can be sent; for limited gifts only
     */
    public static function make(
        string $id,
        Sticker $sticker,
        int $star_count,
        ?int $total_count = null,
        ?int $remaining_count = null,
    ): static {
        return new static([
            'id' => $id,
            'sticker' => $sticker,
            'star_count' => $star_count,
            'total_count' => $total_count,
            'remaining_count' => $remaining_count,
        ]);
    }
}
