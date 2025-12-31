<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object describes the rating of a user based on their Telegram Star spendings.
 */
class UserRating extends Type
{
    /** Current level of the user, indicating their reliability when purchasing digital goods and services. A higher level suggests a more trustworthy customer; a negative level is likely reason for concern. */
    public int $level;

    /** Numerical value of the user's rating; the higher the rating, the better */
    public int $rating;

    /** The rating value required to get the current level */
    public int $current_level_rating;

    /** <em>Optional</em>. The rating value required to get to the next level; omitted if the maximum level was reached */
    public ?int $next_level_rating = null;

    /**
     * @param  int  $level  Current level of the user, indicating their reliability when purchasing digital goods and services. A higher level suggests a more trustworthy customer; a negative level is likely reason for concern.
     * @param  int  $rating  Numerical value of the user's rating; the higher the rating, the better
     * @param  int  $current_level_rating  The rating value required to get the current level
     * @param  int  $next_level_rating  <em>Optional</em>. The rating value required to get to the next level; omitted if the maximum level was reached
     */
    public static function make(
        int $level,
        int $rating,
        int $current_level_rating,
        ?int $next_level_rating = null,
    ): static {
        return new static([
            'level' => $level,
            'rating' => $rating,
            'current_level_rating' => $current_level_rating,
            'next_level_rating' => $next_level_rating,
        ]);
    }
}
