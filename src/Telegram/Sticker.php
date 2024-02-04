<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a sticker.
 */
class Sticker extends Type
{
    /** Identifier for this file, which can be used to download or reuse the file */
    public string $file_id;

    /** Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
    public string $file_unique_id;

    /** Type of the sticker, currently one of “regular”, “mask”, “custom_emoji”. The type of the sticker is independent from its format, which is determined by the fields <em>is_animated</em> and <em>is_video</em>. */
    public string $type;

    /** Sticker width */
    public int $width;

    /** Sticker height */
    public int $height;

    /** <em>True</em>, if the sticker is <a href="https://telegram.org/blog/animated-stickers">animated</a> */
    public bool $is_animated;

    /** <em>True</em>, if the sticker is a <a href="https://telegram.org/blog/video-stickers-better-reactions">video sticker</a> */
    public bool $is_video;

    /** <em>Optional</em>. Sticker thumbnail in the .WEBP or .JPG format */
    public ?PhotoSize $thumbnail = null;

    /** <em>Optional</em>. Emoji associated with the sticker */
    public ?string $emoji = null;

    /** <em>Optional</em>. Name of the sticker set to which the sticker belongs */
    public ?string $set_name = null;

    /** <em>Optional</em>. For premium regular stickers, premium animation for the sticker */
    public ?File $premium_animation = null;

    /** <em>Optional</em>. For mask stickers, the position where the mask should be placed */
    public ?MaskPosition $mask_position = null;

    /** <em>Optional</em>. For custom emoji stickers, unique identifier of the custom emoji */
    public ?string $custom_emoji_id = null;

    /** <em>Optional</em>. <em>True</em>, if the sticker must be repainted to a text color in messages, the color of the Telegram Premium badge in emoji status, white color on chat photos, or another appropriate color in other places */
    public ?bool $needs_repainting = null;

    /** <em>Optional</em>. File size in bytes */
    public ?int $file_size = null;

    /**
     * @param  string  $file_id  Identifier for this file, which can be used to download or reuse the file
     * @param  string  $file_unique_id  Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param  string  $type  Type of the sticker, currently one of “regular”, “mask”, “custom_emoji”. The type of the sticker is independent from its format, which is determined by the fields <em>is_animated</em> and <em>is_video</em>.
     * @param  int  $width  Sticker width
     * @param  int  $height  Sticker height
     * @param  bool  $is_animated  <em>True</em>, if the sticker is <a href="https://telegram.org/blog/animated-stickers">animated</a>
     * @param  bool  $is_video  <em>True</em>, if the sticker is a <a href="https://telegram.org/blog/video-stickers-better-reactions">video sticker</a>
     * @param  PhotoSize  $thumbnail  <em>Optional</em>. Sticker thumbnail in the .WEBP or .JPG format
     * @param  string  $emoji  <em>Optional</em>. Emoji associated with the sticker
     * @param  string  $set_name  <em>Optional</em>. Name of the sticker set to which the sticker belongs
     * @param  File  $premium_animation  <em>Optional</em>. For premium regular stickers, premium animation for the sticker
     * @param  MaskPosition  $mask_position  <em>Optional</em>. For mask stickers, the position where the mask should be placed
     * @param  string  $custom_emoji_id  <em>Optional</em>. For custom emoji stickers, unique identifier of the custom emoji
     * @param  bool  $needs_repainting  <em>Optional</em>. <em>True</em>, if the sticker must be repainted to a text color in messages, the color of the Telegram Premium badge in emoji status, white color on chat photos, or another appropriate color in other places
     * @param  int  $file_size  <em>Optional</em>. File size in bytes
     */
    public static function make(
        string $file_id,
        string $file_unique_id,
        string $type,
        int $width,
        int $height,
        bool $is_animated,
        bool $is_video,
        ?PhotoSize $thumbnail = null,
        ?string $emoji = null,
        ?string $set_name = null,
        ?File $premium_animation = null,
        ?MaskPosition $mask_position = null,
        ?string $custom_emoji_id = null,
        ?bool $needs_repainting = null,
        ?int $file_size = null,
    ): static {
        return new static([
            'file_id' => $file_id,
            'file_unique_id' => $file_unique_id,
            'type' => $type,
            'width' => $width,
            'height' => $height,
            'is_animated' => $is_animated,
            'is_video' => $is_video,
            'thumbnail' => $thumbnail,
            'emoji' => $emoji,
            'set_name' => $set_name,
            'premium_animation' => $premium_animation,
            'mask_position' => $mask_position,
            'custom_emoji_id' => $custom_emoji_id,
            'needs_repainting' => $needs_repainting,
            'file_size' => $file_size,
        ]);
    }
}
