<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents an animation file (GIF or H.264/MPEG-4 AVC video without sound) to be sent.
 */
class InputMediaAnimation extends InputMedia
{
    /** Type of the result, must be animation */
    public string $type = 'animation';

    /** Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files » */
    public \Telepath\Types\InputFile|string|null $thumbnail = null;

    /** Optional. Animation width */
    public ?int $width = null;

    /** Optional. Animation height */
    public ?int $height = null;

    /** Optional. Animation duration in seconds */
    public ?int $duration = null;

    /** Optional. Pass True if the animation needs to be covered with a spoiler animation */
    public ?bool $has_spoiler = null;

    /**
     * @param string|\Telepath\Types\InputFile $media File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
     * @param \Telepath\Types\InputFile|string $thumbnail Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
     * @param string $caption Optional. Caption of the animation to be sent, 0-1024 characters after entities parsing
     * @param string $parse_mode Optional. Mode for parsing entities in the animation caption. See formatting options for more details.
     * @param MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param int $width Optional. Animation width
     * @param int $height Optional. Animation height
     * @param int $duration Optional. Animation duration in seconds
     * @param bool $has_spoiler Optional. Pass True if the animation needs to be covered with a spoiler animation
     */
    public static function make(
        string|\Telepath\Types\InputFile $media,
        \Telepath\Types\InputFile|string|null $thumbnail = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?int $width = null,
        ?int $height = null,
        ?int $duration = null,
        ?bool $has_spoiler = null,
    ): static {
        return new static([
            'media' => $media,
            'thumbnail' => $thumbnail,
            'caption' => $caption,
            'parse_mode' => $parse_mode,
            'caption_entities' => $caption_entities,
            'width' => $width,
            'height' => $height,
            'duration' => $duration,
            'has_spoiler' => $has_spoiler,
        ]);
    }
}
