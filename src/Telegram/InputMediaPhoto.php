<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents a photo to be sent.
 */
class InputMediaPhoto extends InputMedia
{
    /** Type of the result, must be photo */
    public string $type = 'photo';

    /**
     * @param string|\Tii\Telepath\Types\InputFile $media File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More info on Sending Files »
     * @param string $caption Optional. Caption of the photo to be sent, 0-1024 characters after entities parsing
     * @param string $parse_mode Optional. Mode for parsing entities in the photo caption. See formatting options for more details.
     * @param MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     */
    public static function make(
        string|\Tii\Telepath\Types\InputFile $media,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null
    ): static {
        return new static([
            'media' => $media,
            'caption' => $caption,
            'parse_mode' => $parse_mode,
            'caption_entities' => $caption_entities,
        ]);
    }
}
