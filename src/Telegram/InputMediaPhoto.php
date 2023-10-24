<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\InputFile;

/**
 * Represents a photo to be sent.
 */
class InputMediaPhoto extends InputMedia
{
    /** Type of the result, must be <em>photo</em> */
    public string $type = 'photo';

    /** <em>Optional</em>. Pass <em>True</em> if the photo needs to be covered with a spoiler animation */
    public ?bool $has_spoiler = null;

    /**
     * @param  string|InputFile  $media File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a>
     * @param  string  $caption <em>Optional</em>. Caption of the photo to be sent, 0-1024 characters after entities parsing
     * @param  string  $parse_mode <em>Optional</em>. Mode for parsing entities in the photo caption. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]  $caption_entities <em>Optional</em>. List of special entities that appear in the caption, which can be specified instead of <em>parse_mode</em>
     * @param  bool  $has_spoiler <em>Optional</em>. Pass <em>True</em> if the photo needs to be covered with a spoiler animation
     */
    public static function make(
        string|InputFile $media,
        string $caption = null,
        string $parse_mode = null,
        array $caption_entities = null,
        bool $has_spoiler = null,
    ): static {
        return new static([
            'media' => $media,
            'caption' => $caption,
            'parse_mode' => $parse_mode,
            'caption_entities' => $caption_entities,
            'has_spoiler' => $has_spoiler,
        ]);
    }
}
