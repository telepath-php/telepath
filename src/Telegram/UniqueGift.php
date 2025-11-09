<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object describes a unique gift that was upgraded from a regular gift.
 */
class UniqueGift extends Type
{
    /** Human-readable name of the regular gift from which this unique gift was upgraded */
    public string $base_name;

    /** Unique name of the gift. This name can be used in https://t.me/nft/... links and story areas */
    public string $name;

    /** Unique number of the upgraded gift among gifts upgraded from the same regular gift */
    public int $number;

    /** Model of the gift */
    public UniqueGiftModel $model;

    /** Symbol of the gift */
    public UniqueGiftSymbol $symbol;

    /** Backdrop of the gift */
    public UniqueGiftBackdrop $backdrop;

    /** <em>Optional</em>. Information about the chat that published the gift */
    public ?Chat $publisher_chat = null;

    /**
     * @param  string  $base_name  Human-readable name of the regular gift from which this unique gift was upgraded
     * @param  string  $name  Unique name of the gift. This name can be used in https://t.me/nft/... links and story areas
     * @param  int  $number  Unique number of the upgraded gift among gifts upgraded from the same regular gift
     * @param  UniqueGiftModel  $model  Model of the gift
     * @param  UniqueGiftSymbol  $symbol  Symbol of the gift
     * @param  UniqueGiftBackdrop  $backdrop  Backdrop of the gift
     * @param  Chat  $publisher_chat  <em>Optional</em>. Information about the chat that published the gift
     */
    public static function make(
        string $base_name,
        string $name,
        int $number,
        UniqueGiftModel $model,
        UniqueGiftSymbol $symbol,
        UniqueGiftBackdrop $backdrop,
        ?Chat $publisher_chat = null,
    ): static {
        return new static([
            'base_name' => $base_name,
            'name' => $name,
            'number' => $number,
            'model' => $model,
            'symbol' => $symbol,
            'backdrop' => $backdrop,
            'publisher_chat' => $publisher_chat,
        ]);
    }
}
