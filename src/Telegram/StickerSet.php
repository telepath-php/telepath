<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents a sticker set.
 */
class StickerSet extends \Tii\Telepath\Types\Type
{
    /** Sticker set name */
    public string $name;

    /** Sticker set title */
    public string $title;

    /** True, if the sticker set contains animated stickers */
    public bool $is_animated;

    /** True, if the sticker set contains video stickers */
    public bool $is_video;

    /** True, if the sticker set contains masks */
    public bool $contains_masks;

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
     * @param bool $is_animated True, if the sticker set contains animated stickers
     * @param bool $is_video True, if the sticker set contains video stickers
     * @param bool $contains_masks True, if the sticker set contains masks
     * @param Sticker[] $stickers List of all set stickers
     * @param PhotoSize $thumb Optional. Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format
     */
    public static function make(
        string $name,
        string $title,
        bool $is_animated,
        bool $is_video,
        bool $contains_masks,
        array $stickers,
        ?PhotoSize $thumb = null
    ): static {
        return new static([
            'name' => $name,
            'title' => $title,
            'is_animated' => $is_animated,
            'is_video' => $is_video,
            'contains_masks' => $contains_masks,
            'stickers' => $stickers,
            'thumb' => $thumb,
        ]);
    }
}
