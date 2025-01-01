<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents a link to an animated GIF file. By default, this animated GIF file will be sent by the user with optional caption. Alternatively, you can use <em>input_message_content</em> to send a message with the specified content instead of the animation.
 */
class InlineQueryResultGif extends InlineQueryResult
{
    /** Type of the result, must be <em>gif</em> */
    public string $type = 'gif';

    /** A valid URL for the GIF file */
    public string $gif_url;

    /** URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result */
    public string $thumbnail_url;

    /** <em>Optional</em>. Width of the GIF */
    public ?int $gif_width = null;

    /** <em>Optional</em>. Height of the GIF */
    public ?int $gif_height = null;

    /** <em>Optional</em>. Duration of the GIF in seconds */
    public ?int $gif_duration = null;

    /** <em>Optional</em>. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg” */
    public ?string $thumbnail_mime_type = null;

    /** <em>Optional</em>. Title for the result */
    public ?string $title = null;

    /** <em>Optional</em>. Caption of the GIF file to be sent, 0-1024 characters after entities parsing */
    public ?string $caption = null;

    /** <em>Optional</em>. Mode for parsing entities in the caption. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details. */
    public ?string $parse_mode = null;

    /**
     * <em>Optional</em>. List of special entities that appear in the caption, which can be specified instead of <em>parse_mode</em>
     *
     * @var MessageEntity[]
     */
    public ?array $caption_entities = null;

    /** <em>Optional</em>. Pass <em>True</em>, if the caption must be shown above the message media */
    public ?bool $show_caption_above_media = null;

    /** <em>Optional</em>. Content of the message to be sent instead of the GIF animation */
    public ?InputMessageContent $input_message_content = null;

    /**
     * @param  string  $id  Unique identifier for this result, 1-64 bytes
     * @param  string  $gif_url  A valid URL for the GIF file
     * @param  string  $thumbnail_url  URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
     * @param  int  $gif_width  <em>Optional</em>. Width of the GIF
     * @param  int  $gif_height  <em>Optional</em>. Height of the GIF
     * @param  int  $gif_duration  <em>Optional</em>. Duration of the GIF in seconds
     * @param  string  $thumbnail_mime_type  <em>Optional</em>. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg”
     * @param  string  $title  <em>Optional</em>. Title for the result
     * @param  string  $caption  <em>Optional</em>. Caption of the GIF file to be sent, 0-1024 characters after entities parsing
     * @param  string  $parse_mode  <em>Optional</em>. Mode for parsing entities in the caption. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]  $caption_entities  <em>Optional</em>. List of special entities that appear in the caption, which can be specified instead of <em>parse_mode</em>
     * @param  bool  $show_caption_above_media  <em>Optional</em>. Pass <em>True</em>, if the caption must be shown above the message media
     * @param  InlineKeyboardMarkup  $reply_markup  <em>Optional</em>. <a href="https://core.telegram.org/bots/features#inline-keyboards">Inline keyboard</a> attached to the message
     * @param  InputMessageContent  $input_message_content  <em>Optional</em>. Content of the message to be sent instead of the GIF animation
     */
    public static function make(
        string $id,
        string $gif_url,
        string $thumbnail_url,
        ?int $gif_width = null,
        ?int $gif_height = null,
        ?int $gif_duration = null,
        ?string $thumbnail_mime_type = null,
        ?string $title = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?bool $show_caption_above_media = null,
        ?InlineKeyboardMarkup $reply_markup = null,
        ?InputMessageContent $input_message_content = null,
    ): static {
        return new static([
            'id' => $id,
            'gif_url' => $gif_url,
            'thumbnail_url' => $thumbnail_url,
            'gif_width' => $gif_width,
            'gif_height' => $gif_height,
            'gif_duration' => $gif_duration,
            'thumbnail_mime_type' => $thumbnail_mime_type,
            'title' => $title,
            'caption' => $caption,
            'parse_mode' => $parse_mode,
            'caption_entities' => $caption_entities,
            'show_caption_above_media' => $show_caption_above_media,
            'reply_markup' => $reply_markup,
            'input_message_content' => $input_message_content,
        ]);
    }
}
