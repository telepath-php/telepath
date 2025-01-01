<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Files\InputFile;
use Telepath\Types\Type;

/**
 * This object describes a sticker to be added to a sticker set.
 */
class InputSticker extends Type
{
    /** The added sticker. Pass a <em>file_id</em> as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, upload a new one using multipart/form-data, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. Animated and video stickers can't be uploaded via HTTP URL. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a> */
    public InputFile|string $sticker;

    /** Format of the added sticker, must be one of “static” for a .WEBP or .PNG image, “animated” for a .TGS animation, “video” for a .WEBM video */
    public string $format;

    /**
     * List of 1-20 emoji associated with the sticker
     *
     * @var string[]
     */
    public array $emoji_list;

    /** <em>Optional</em>. Position where the mask should be placed on faces. For “mask” stickers only. */
    public ?MaskPosition $mask_position = null;

    /**
     * <em>Optional</em>. List of 0-20 search keywords for the sticker with total length of up to 64 characters. For “regular” and “custom_emoji” stickers only.
     *
     * @var string[]
     */
    public ?array $keywords = null;

    /**
     * @param  InputFile|string  $sticker  The added sticker. Pass a <em>file_id</em> as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, upload a new one using multipart/form-data, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. Animated and video stickers can't be uploaded via HTTP URL. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a>
     * @param  string  $format  Format of the added sticker, must be one of “static” for a .WEBP or .PNG image, “animated” for a .TGS animation, “video” for a .WEBM video
     * @param  string[]  $emoji_list  List of 1-20 emoji associated with the sticker
     * @param  MaskPosition  $mask_position  <em>Optional</em>. Position where the mask should be placed on faces. For “mask” stickers only.
     * @param  string[]  $keywords  <em>Optional</em>. List of 0-20 search keywords for the sticker with total length of up to 64 characters. For “regular” and “custom_emoji” stickers only.
     */
    public static function make(
        InputFile|string $sticker,
        string $format,
        array $emoji_list,
        ?MaskPosition $mask_position = null,
        ?array $keywords = null,
    ): static {
        return new static([
            'sticker' => $sticker,
            'format' => $format,
            'emoji_list' => $emoji_list,
            'mask_position' => $mask_position,
            'keywords' => $keywords,
        ]);
    }
}
