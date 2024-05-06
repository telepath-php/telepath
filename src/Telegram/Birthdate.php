<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes the birthdate of a user.
 */
class Birthdate extends Type
{
    /** Day of the user's birth; 1-31 */
    public int $day;

    /** Month of the user's birth; 1-12 */
    public int $month;

    /** <em>Optional</em>. Year of the user's birth */
    public ?int $year = null;

    /**
     * @param  int  $day  Day of the user's birth; 1-31
     * @param  int  $month  Month of the user's birth; 1-12
     * @param  int  $year  <em>Optional</em>. Year of the user's birth
     */
    public static function make(int $day, int $month, ?int $year = null): static
    {
        return new static([
            'day' => $day,
            'month' => $month,
            'year' => $year,
        ]);
    }
}
