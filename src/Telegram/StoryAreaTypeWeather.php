<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Describes a story area containing weather information. Currently, a story can have up to 3 weather areas.
 */
class StoryAreaTypeWeather extends StoryAreaType
{
    /** Type of the area, always “weather” */
    public string $type = 'weather';

    /** Temperature, in degree Celsius */
    public float $temperature;

    /** Emoji representing the weather */
    public string $emoji;

    /** A color of the area background in the ARGB format */
    public int $background_color;

    /**
     * @param  float  $temperature  Temperature, in degree Celsius
     * @param  string  $emoji  Emoji representing the weather
     * @param  int  $background_color  A color of the area background in the ARGB format
     */
    public static function make(float $temperature, string $emoji, int $background_color): static
    {
        return new static([
            'temperature' => $temperature,
            'emoji' => $emoji,
            'background_color' => $background_color,
        ]);
    }
}
