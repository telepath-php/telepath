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
    /** Identifier of the regular gift from which the gift was upgraded */
    public string $gift_id;

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

    /** <em>Optional</em>. <em>True</em>, if the original regular gift was exclusively purchaseable by Telegram Premium subscribers */
    public ?bool $is_premium = null;

    /** <em>Optional</em>. <em>True</em>, if the gift is assigned from the TON blockchain and can't be resold or transferred in Telegram */
    public ?bool $is_from_blockchain = null;

    /** <em>Optional</em>. The color scheme that can be used by the gift's owner for the chat's name, replies to messages and link previews; for business account gifts and gifts that are currently on sale only */
    public ?UniqueGiftColors $colors = null;

    /** <em>Optional</em>. Information about the chat that published the gift */
    public ?Chat $publisher_chat = null;

    /**
     * @param  string  $gift_id  Identifier of the regular gift from which the gift was upgraded
     * @param  string  $base_name  Human-readable name of the regular gift from which this unique gift was upgraded
     * @param  string  $name  Unique name of the gift. This name can be used in https://t.me/nft/... links and story areas
     * @param  int  $number  Unique number of the upgraded gift among gifts upgraded from the same regular gift
     * @param  UniqueGiftModel  $model  Model of the gift
     * @param  UniqueGiftSymbol  $symbol  Symbol of the gift
     * @param  UniqueGiftBackdrop  $backdrop  Backdrop of the gift
     * @param  bool  $is_premium  <em>Optional</em>. <em>True</em>, if the original regular gift was exclusively purchaseable by Telegram Premium subscribers
     * @param  bool  $is_from_blockchain  <em>Optional</em>. <em>True</em>, if the gift is assigned from the TON blockchain and can't be resold or transferred in Telegram
     * @param  UniqueGiftColors  $colors  <em>Optional</em>. The color scheme that can be used by the gift's owner for the chat's name, replies to messages and link previews; for business account gifts and gifts that are currently on sale only
     * @param  Chat  $publisher_chat  <em>Optional</em>. Information about the chat that published the gift
     */
    public static function make(
        string $gift_id,
        string $base_name,
        string $name,
        int $number,
        UniqueGiftModel $model,
        UniqueGiftSymbol $symbol,
        UniqueGiftBackdrop $backdrop,
        ?bool $is_premium = null,
        ?bool $is_from_blockchain = null,
        ?UniqueGiftColors $colors = null,
        ?Chat $publisher_chat = null,
    ): static {
        return new static([
            'gift_id' => $gift_id,
            'base_name' => $base_name,
            'name' => $name,
            'number' => $number,
            'model' => $model,
            'symbol' => $symbol,
            'backdrop' => $backdrop,
            'is_premium' => $is_premium,
            'is_from_blockchain' => $is_from_blockchain,
            'colors' => $colors,
            'publisher_chat' => $publisher_chat,
        ]);
    }
}
