<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

class BusinessOpeningHours extends Type
{
    /** Unique name of the time zone for which the opening hours are defined */
    public string $time_zone_name;

    /**
     * List of time intervals describing business opening hours
     *
     * @var BusinessOpeningHoursInterval[]
     */
    public array $opening_hours;

    /**
     * @param  string  $time_zone_name  Unique name of the time zone for which the opening hours are defined
     * @param  BusinessOpeningHoursInterval[]  $opening_hours  List of time intervals describing business opening hours
     */
    public static function make(string $time_zone_name, array $opening_hours): static
    {
        return new static([
            'time_zone_name' => $time_zone_name,
            'opening_hours' => $opening_hours,
        ]);
    }
}
