<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Contains the list of gifts received and owned by a user or a chat.
 */
class OwnedGifts extends Type
{
    /** The total number of gifts owned by the user or the chat */
    public int $total_count;

    /**
     * The list of gifts
     *
     * @var OwnedGift[]
     */
    public array $gifts;

    /** <em>Optional</em>. Offset for the next request. If empty, then there are no more results */
    public ?string $next_offset = null;

    /**
     * @param  int  $total_count  The total number of gifts owned by the user or the chat
     * @param  OwnedGift[]  $gifts  The list of gifts
     * @param  string  $next_offset  <em>Optional</em>. Offset for the next request. If empty, then there are no more results
     */
    public static function make(int $total_count, array $gifts, ?string $next_offset = null): static
    {
        return new static([
            'total_count' => $total_count,
            'gifts' => $gifts,
            'next_offset' => $next_offset,
        ]);
    }
}
