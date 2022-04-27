<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class StickerSet extends \Tii\Telepath\Type
{
    public readonly string $name;

    public readonly string $title;

    public readonly bool $is_animated;

    public readonly bool $is_video;

    public readonly bool $contains_masks;

    /**
     * @var Sticker[]
     */
    public readonly array $stickers;

    public readonly PhotoSize $thumb;
}

