<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Support\ParseMode\ParseMode;

/**
 * Represents a link to a photo. By default, this photo will be sent by the user with optional caption. Alternatively, you can use <em>input_message_content</em> to send a message with the specified content instead of the photo.
 */
class InlineQueryResultPhoto extends InlineQueryResult
{
    /** Type of the result, must be <em>photo</em> */
    public string $type = 'photo';

    /** A valid URL of the photo. Photo must be in JPEG format. Photo size must not exceed 5MB */
    public string $photo_url;

    /** URL of the thumbnail for the photo */
    public string $thumbnail_url;

    /** <em>Optional</em>. Width of the photo */
    public ?int $photo_width = null;

    /** <em>Optional</em>. Height of the photo */
    public ?int $photo_height = null;

    /** <em>Optional</em>. Title for the result */
    public ?string $title = null;

    /** <em>Optional</em>. Short description of the result */
    public ?string $description = null;

    /** <em>Optional</em>. Caption of the photo to be sent, 0-1024 characters after entities parsing */
    public ?string $caption = null;

    /** <em>Optional</em>. Mode for parsing entities in the photo caption. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details. */
    public ParseMode|string|null $parse_mode = null;

    /**
     * <em>Optional</em>. List of special entities that appear in the caption, which can be specified instead of <em>parse_mode</em>
     *
     * @var MessageEntity[]
     */
    public ?array $caption_entities = null;

    /** <em>Optional</em>. Pass <em>True</em>, if the caption must be shown above the message media */
    public ?bool $show_caption_above_media = null;

    /** <em>Optional</em>. Content of the message to be sent instead of the photo */
    public ?InputMessageContent $input_message_content = null;

    /**
     * @param  string  $id  Unique identifier for this result, 1-64 bytes
     * @param  string  $photo_url  A valid URL of the photo. Photo must be in JPEG format. Photo size must not exceed 5MB
     * @param  string  $thumbnail_url  URL of the thumbnail for the photo
     * @param  int  $photo_width  <em>Optional</em>. Width of the photo
     * @param  int  $photo_height  <em>Optional</em>. Height of the photo
     * @param  string  $title  <em>Optional</em>. Title for the result
     * @param  string  $description  <em>Optional</em>. Short description of the result
     * @param  string  $caption  <em>Optional</em>. Caption of the photo to be sent, 0-1024 characters after entities parsing
     * @param  ParseMode|string  $parse_mode  <em>Optional</em>. Mode for parsing entities in the photo caption. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]  $caption_entities  <em>Optional</em>. List of special entities that appear in the caption, which can be specified instead of <em>parse_mode</em>
     * @param  bool  $show_caption_above_media  <em>Optional</em>. Pass <em>True</em>, if the caption must be shown above the message media
     * @param  InlineKeyboardMarkup  $reply_markup  <em>Optional</em>. <a href="https://core.telegram.org/bots/features#inline-keyboards">Inline keyboard</a> attached to the message
     * @param  InputMessageContent  $input_message_content  <em>Optional</em>. Content of the message to be sent instead of the photo
     */
    public static function make(
        string $id,
        string $photo_url,
        string $thumbnail_url,
        ?int $photo_width = null,
        ?int $photo_height = null,
        ?string $title = null,
        ?string $description = null,
        ?string $caption = null,
        ParseMode|string|null $parse_mode = null,
        ?array $caption_entities = null,
        ?bool $show_caption_above_media = null,
        ?InlineKeyboardMarkup $reply_markup = null,
        ?InputMessageContent $input_message_content = null,
    ): static {
        return new static([
            'id' => $id,
            'photo_url' => $photo_url,
            'thumbnail_url' => $thumbnail_url,
            'photo_width' => $photo_width,
            'photo_height' => $photo_height,
            'title' => $title,
            'description' => $description,
            'caption' => $caption,
            'parse_mode' => $parse_mode,
            'caption_entities' => $caption_entities,
            'show_caption_above_media' => $show_caption_above_media,
            'reply_markup' => $reply_markup,
            'input_message_content' => $input_message_content,
        ]);
    }
}
