<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Files\InputFile;
use Telepath\Support\ParseMode\ParseMode;

/**
 * Represents a general file to be sent.
 */
class InputMediaDocument extends InputMedia
{
    /** Type of the result, must be <em>document</em> */
    public string $type = 'document';

    /** <em>Optional</em>. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a> */
    public InputFile|string|null $thumbnail = null;

    /** <em>Optional</em>. Disables automatic server-side content type detection for files uploaded using multipart/form-data. Always <em>True</em>, if the document is sent as part of an album. */
    public ?bool $disable_content_type_detection = null;

    /**
     * @param  string|InputFile  $media  File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a>
     * @param  InputFile|string  $thumbnail  <em>Optional</em>. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. <a href="https://core.telegram.org/bots/api#sending-files">More information on Sending Files &#xBB;</a>
     * @param  string  $caption  <em>Optional</em>. Caption of the document to be sent, 0-1024 characters after entities parsing
     * @param  ParseMode|string  $parse_mode  <em>Optional</em>. Mode for parsing entities in the document caption. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]  $caption_entities  <em>Optional</em>. List of special entities that appear in the caption, which can be specified instead of <em>parse_mode</em>
     * @param  bool  $disable_content_type_detection  <em>Optional</em>. Disables automatic server-side content type detection for files uploaded using multipart/form-data. Always <em>True</em>, if the document is sent as part of an album.
     */
    public static function make(
        string|InputFile $media,
        InputFile|string|null $thumbnail = null,
        ?string $caption = null,
        ParseMode|string|null $parse_mode = null,
        ?array $caption_entities = null,
        ?bool $disable_content_type_detection = null,
    ): static {
        return new static([
            'media' => $media,
            'thumbnail' => $thumbnail,
            'caption' => $caption,
            'parse_mode' => $parse_mode,
            'caption_entities' => $caption_entities,
            'disable_content_type_detection' => $disable_content_type_detection,
        ]);
    }
}
