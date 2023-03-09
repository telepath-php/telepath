<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object describes a sticker to be added to a sticker set.
 */
class InputSticker extends Type
{
    /** The added sticker. Pass a file_id as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. Animated and video stickers can't be uploaded via HTTP URL. More information on Sending Files » */
    public \Telepath\Types\InputFile|string $sticker;

    /**
     * List of 1-20 emoji associated with the sticker
     * @var string[]
     */
    public array $emoji_list;

    /** Optional. Position where the mask should be placed on faces. For “mask” stickers only. */
    public ?MaskPosition $mask_position = null;

    /**
     * Optional. List of 0-20 search keywords for the sticker with total length of up to 64 characters. For “regular” and “custom_emoji” stickers only.
     * @var string[]
     */
    public ?array $keywords = null;

    /**
     * @param \Telepath\Types\InputFile|string $sticker The added sticker. Pass a file_id as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. Animated and video stickers can't be uploaded via HTTP URL. More information on Sending Files »
     * @param string[] $emoji_list List of 1-20 emoji associated with the sticker
     * @param MaskPosition $mask_position Optional. Position where the mask should be placed on faces. For “mask” stickers only.
     * @param string[] $keywords Optional. List of 0-20 search keywords for the sticker with total length of up to 64 characters. For “regular” and “custom_emoji” stickers only.
     */
    public static function make(
        \Telepath\Types\InputFile|string $sticker,
        array $emoji_list,
        ?MaskPosition $mask_position = null,
        ?array $keywords = null,
    ): static {
        return new static([
            'sticker' => $sticker,
            'emoji_list' => $emoji_list,
            'mask_position' => $mask_position,
            'keywords' => $keywords,
        ]);
    }
}
