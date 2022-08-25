<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

use Tii\Telepath\Types\Type;

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

    /** True, if the sticker set contains animated stickers */
    public bool $is_animated;

    /** True, if the sticker set contains video stickers */
    public bool $is_video;

    /**
     * List of all set stickers
     * @var Sticker[]
     */
    public array $stickers;

    /** Optional. Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format */
    public ?PhotoSize $thumb = null;

    /**
     * @param string $name Sticker set name
     * @param string $title Sticker set title
     * @param string $sticker_type Type of stickers in the set, currently one of “regular”, “mask”, “custom_emoji”
     * @param bool $is_animated True, if the sticker set contains animated stickers
     * @param bool $is_video True, if the sticker set contains video stickers
     * @param Sticker[] $stickers List of all set stickers
     * @param PhotoSize $thumb Optional. Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format
     */
    public static function make(
        string $name,
        string $title,
        string $sticker_type,
        bool $is_animated,
        bool $is_video,
        array $stickers,
        ?PhotoSize $thumb = null
    ): static {
        return new static([
            'name' => $name,
            'title' => $title,
            'sticker_type' => $sticker_type,
            'is_animated' => $is_animated,
            'is_video' => $is_video,
            'stickers' => $stickers,
            'thumb' => $thumb,
        ]);
    }
}
