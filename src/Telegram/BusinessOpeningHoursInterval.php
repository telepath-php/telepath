<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes an interval of time during which a business is open.
 */
class BusinessOpeningHoursInterval extends Type
{
    /** The minute's sequence number in a week, starting on Monday, marking the start of the time interval during which the business is open; 0 - 7 * 24 * 60 */
    public int $opening_minute;

    /** The minute's sequence number in a week, starting on Monday, marking the end of the time interval during which the business is open; 0 - 8 * 24 * 60 */
    public int $closing_minute;

    /**
     * @param  int  $opening_minute  The minute's sequence number in a week, starting on Monday, marking the start of the time interval during which the business is open; 0 - 7 * 24 * 60
     * @param  int  $closing_minute  The minute's sequence number in a week, starting on Monday, marking the end of the time interval during which the business is open; 0 - 8 * 24 * 60
     */
    public static function make(int $opening_minute, int $closing_minute): static
    {
        return new static([
            'opening_minute' => $opening_minute,
            'closing_minute' => $closing_minute,
        ]);
    }
}
