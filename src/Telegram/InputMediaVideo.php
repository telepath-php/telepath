<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\InputFile;

/**
 * Represents a video to be sent.
 */
class InputMediaVideo extends InputMedia
{
    /** Type of the result, must be <em>video</em> */
    public string $type = 'video';

    /** <em>Optional</em>. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a> */
    public InputFile|string|null $thumbnail = null;

    /** <em>Optional</em>. Video width */
    public ?int $width = null;

    /** <em>Optional</em>. Video height */
    public ?int $height = null;

    /** <em>Optional</em>. Video duration in seconds */
    public ?int $duration = null;

    /** <em>Optional</em>. Pass <em>True</em> if the uploaded video is suitable for streaming */
    public ?bool $supports_streaming = null;

    /** <em>Optional</em>. Pass <em>True</em> if the video needs to be covered with a spoiler animation */
    public ?bool $has_spoiler = null;

    /**
     * @param  string|InputFile  $media  File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a>
     * @param  InputFile|string  $thumbnail  <em>Optional</em>. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a>
     * @param  string  $caption  <em>Optional</em>. Caption of the video to be sent, 0-1024 characters after entities parsing
     * @param  string  $parse_mode  <em>Optional</em>. Mode for parsing entities in the video caption. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]  $caption_entities  <em>Optional</em>. List of special entities that appear in the caption, which can be specified instead of <em>parse_mode</em>
     * @param  int  $width  <em>Optional</em>. Video width
     * @param  int  $height  <em>Optional</em>. Video height
     * @param  int  $duration  <em>Optional</em>. Video duration in seconds
     * @param  bool  $supports_streaming  <em>Optional</em>. Pass <em>True</em> if the uploaded video is suitable for streaming
     * @param  bool  $has_spoiler  <em>Optional</em>. Pass <em>True</em> if the video needs to be covered with a spoiler animation
     */
    public static function make(
        string|InputFile $media,
        InputFile|string|null $thumbnail = null,
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
            'thumbnail' => $thumbnail,
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
