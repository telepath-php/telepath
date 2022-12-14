<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents a video to be sent.
 */
class InputMediaVideo extends InputMedia
{
    /** Type of the result, must be video */
    public string $type = 'video';

    /** Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files » */
    public \Telepath\Types\InputFile|string|null $thumb = null;

    /** Optional. Video width */
    public ?int $width = null;

    /** Optional. Video height */
    public ?int $height = null;

    /** Optional. Video duration in seconds */
    public ?int $duration = null;

    /** Optional. Pass True if the uploaded video is suitable for streaming */
    public ?bool $supports_streaming = null;

    /** Optional. Pass True if the video needs to be covered with a spoiler animation */
    public ?bool $has_spoiler = null;

    /**
     * @param string|\Telepath\Types\InputFile $media File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
     * @param \Telepath\Types\InputFile|string $thumb Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
     * @param string $caption Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
     * @param string $parse_mode Optional. Mode for parsing entities in the video caption. See formatting options for more details.
     * @param MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param int $width Optional. Video width
     * @param int $height Optional. Video height
     * @param int $duration Optional. Video duration in seconds
     * @param bool $supports_streaming Optional. Pass True if the uploaded video is suitable for streaming
     * @param bool $has_spoiler Optional. Pass True if the video needs to be covered with a spoiler animation
     */
    public static function make(
        string|\Telepath\Types\InputFile $media,
        \Telepath\Types\InputFile|string|null $thumb = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?int $width = null,
        ?int $height = null,
        ?int $duration = null,
        ?bool $supports_streaming = null,
        ?bool $has_spoiler = null,
    ): static {
        return new static([
            'media' => $media,
            'thumb' => $thumb,
            'caption' => $caption,
            'parse_mode' => $parse_mode,
            'caption_entities' => $caption_entities,
            'width' => $width,
            'height' => $height,
            'duration' => $duration,
            'supports_streaming' => $supports_streaming,
            'has_spoiler' => $has_spoiler,
        ]);
    }
}
