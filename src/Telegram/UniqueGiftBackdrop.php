<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object describes the backdrop of a unique gift.
 */
class UniqueGiftBackdrop extends Type
{
    /** Name of the backdrop */
    public string $name;

    /** Colors of the backdrop */
    public UniqueGiftBackdropColors $colors;

    /** The number of unique gifts that receive this backdrop for every 1000 gifts upgraded */
    public int $rarity_per_mille;

    /**
     * @param  string  $name  Name of the backdrop
     * @param  UniqueGiftBackdropColors  $colors  Colors of the backdrop
     * @param  int  $rarity_per_mille  The number of unique gifts that receive this backdrop for every 1000 gifts upgraded
     */
    public static function make(string $name, UniqueGiftBackdropColors $colors, int $rarity_per_mille): static
    {
        return new static([
            'name' => $name,
            'colors' => $colors,
            'rarity_per_mille' => $rarity_per_mille,
        ]);
    }
}
