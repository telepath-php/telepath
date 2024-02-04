<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a service message about the completion of a giveaway without public winners.
 */
class GiveawayCompleted extends Type
{
    /** Number of winners in the giveaway */
    public int $winner_count;

    /** <em>Optional</em>. Number of undistributed prizes */
    public ?int $unclaimed_prize_count = null;

    /** <em>Optional</em>. Message with the giveaway that was completed, if it wasn't deleted */
    public ?Message $giveaway_message = null;

    /**
     * @param  int  $winner_count  Number of winners in the giveaway
     * @param  int  $unclaimed_prize_count  <em>Optional</em>. Number of undistributed prizes
     * @param  Message  $giveaway_message  <em>Optional</em>. Message with the giveaway that was completed, if it wasn't deleted
     */
    public static function make(
        int $winner_count,
        ?int $unclaimed_prize_count = null,
        ?Message $giveaway_message = null,
    ): static {
        return new static([
            'winner_count' => $winner_count,
            'unclaimed_prize_count' => $unclaimed_prize_count,
            'giveaway_message' => $giveaway_message,
        ]);
    }
}
