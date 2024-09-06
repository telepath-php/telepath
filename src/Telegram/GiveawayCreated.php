<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a service message about the creation of a scheduled giveaway.
 */
class GiveawayCreated extends Type
{
    /** <em>Optional</em>. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only */
    public ?int $prize_star_count = null;

    /**
     * @param  int  $prize_star_count  <em>Optional</em>. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
     */
    public static function make(?int $prize_star_count = null): static
    {
        return new static([
            'prize_star_count' => $prize_star_count,
        ]);
    }
}
