<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object describes the symbol shown on the pattern of a unique gift.
 */
class UniqueGiftSymbol extends Type
{
    /** Name of the symbol */
    public string $name;

    /** The sticker that represents the unique gift */
    public Sticker $sticker;

    /** The number of unique gifts that receive this model for every 1000 gifts upgraded */
    public int $rarity_per_mille;

    /**
     * @param  string  $name  Name of the symbol
     * @param  Sticker  $sticker  The sticker that represents the unique gift
     * @param  int  $rarity_per_mille  The number of unique gifts that receive this model for every 1000 gifts upgraded
     */
    public static function make(string $name, Sticker $sticker, int $rarity_per_mille): static
    {
        return new static([
            'name' => $name,
            'sticker' => $sticker,
            'rarity_per_mille' => $rarity_per_mille,
        ]);
    }
}
