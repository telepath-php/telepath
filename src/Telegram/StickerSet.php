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

    /** <em>True</em>, if the sticker set contains <a href="https://telegram.org/blog/animated-stickers">animated stickers</a> */
    public bool $is_animated;

    /** <em>True</em>, if the sticker set contains <a href="https://telegram.org/blog/video-stickers-better-reactions">video stickers</a> */
    public bool $is_video;

    /**
     * List of all set stickers
     *
     * @var Sticker[]
     */
    public array $stickers;

    /** <em>Optional</em>. Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format */
    public ?PhotoSize $thumbnail = null;

    /**
     * @param  string  $name Sticker set name
     * @param  string  $title Sticker set title
     * @param  string  $sticker_type Type of stickers in the set, currently one of “regular”, “mask”, “custom_emoji”
     * @param  bool  $is_animated <em>True</em>, if the sticker set contains <a href="https://telegram.org/blog/animated-stickers">animated stickers</a>
     * @param  bool  $is_video <em>True</em>, if the sticker set contains <a href="https://telegram.org/blog/video-stickers-better-reactions">video stickers</a>
     * @param  Sticker[]  $stickers List of all set stickers
     * @param  PhotoSize  $thumbnail <em>Optional</em>. Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format
     */
    public static function make(
        string $name,
        string $title,
        string $sticker_type,
        bool $is_animated,
        bool $is_video,
        array $stickers,
        PhotoSize $thumbnail = null,
    ): static {
        return new static([
            'name' => $name,
            'title' => $title,
            'sticker_type' => $sticker_type,
            'is_animated' => $is_animated,
            'is_video' => $is_video,
            'stickers' => $stickers,
            'thumbnail' => $thumbnail,
        ]);
    }
}
