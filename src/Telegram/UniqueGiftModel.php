<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object describes the model of a unique gift.
 */
class UniqueGiftModel extends Type
{
    /** Name of the model */
    public string $name;

    /** The sticker that represents the unique gift */
    public Sticker $sticker;

    /** The number of unique gifts that receive this model for every 1000 gift upgrades. Always 0 for crafted gifts. */
    public int $rarity_per_mille = 0;

    /** <em>Optional</em>. Rarity of the model if it is a crafted model. Currently, can be “uncommon”, “rare”, “epic”, or “legendary”. */
    public ?string $rarity = null;

    /**
     * @param  string  $name  Name of the model
     * @param  Sticker  $sticker  The sticker that represents the unique gift
     * @param  int  $rarity_per_mille  The number of unique gifts that receive this model for every 1000 gift upgrades. Always 0 for crafted gifts.
     * @param  string  $rarity  <em>Optional</em>. Rarity of the model if it is a crafted model. Currently, can be “uncommon”, “rare”, “epic”, or “legendary”.
     */
    public static function make(string $name, Sticker $sticker, int $rarity_per_mille, ?string $rarity = null): static
    {
        return new static([
            'name' => $name,
            'sticker' => $sticker,
            'rarity_per_mille' => $rarity_per_mille,
            'rarity' => $rarity,
        ]);
    }
}
