<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a sticker set.
 */
class StickerSet extends Type
{
    /** Sticker set name */
    public string $name;

    /** Sticker set title */
    public string $title;

    /** Type of stickers in the set, currently one of “regular”, “mask”, “custom_emoji” */
    public string $sticker_type;

    /**
     * List of all set stickers
     *
     * @var Sticker[]
     */
    public array $stickers;

    /** <em>Optional</em>. Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format */
    public ?PhotoSize $thumbnail = null;

    /**
     * @param  string  $name  Sticker set name
     * @param  string  $title  Sticker set title
     * @param  string  $sticker_type  Type of stickers in the set, currently one of “regular”, “mask”, “custom_emoji”
     * @param  Sticker[]  $stickers  List of all set stickers
     * @param  PhotoSize  $thumbnail  <em>Optional</em>. Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format
     */
    public static function make(
        string $name,
        string $title,
        string $sticker_type,
        array $stickers,
        ?PhotoSize $thumbnail = null,
    ): static {
        return new static([
            'name' => $name,
            'title' => $title,
            'sticker_type' => $sticker_type,
            'stickers' => $stickers,
            'thumbnail' => $thumbnail,
        ]);
    }
}
