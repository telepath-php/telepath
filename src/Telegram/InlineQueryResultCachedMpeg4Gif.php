<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents a link to a video animation (H.264/MPEG-4 AVC video without sound) stored on the Telegram servers. By default, this animated MPEG-4 file will be sent by the user with an optional caption. Alternatively, you can use <em>input_message_content</em> to send a message with the specified content instead of the animation.
 */
class InlineQueryResultCachedMpeg4Gif extends InlineQueryResult
{
    /** Type of the result, must be <em>mpeg4_gif</em> */
    public string $type = 'mpeg4_gif';

    /** A valid file identifier for the MPEG4 file */
    public string $mpeg4_file_id;

    /** <em>Optional</em>. Title for the result */
    public ?string $title = null;

    /** <em>Optional</em>. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing */
    public ?string $caption = null;

    /** <em>Optional</em>. Mode for parsing entities in the caption. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details. */
    public ?string $parse_mode = null;

    /**
     * <em>Optional</em>. List of special entities that appear in the caption, which can be specified instead of <em>parse_mode</em>
     * @var MessageEntity[]
     */
    public ?array $caption_entities = null;

    /** <em>Optional</em>. Content of the message to be sent instead of the video animation */
    public ?InputMessageContent $input_message_content = null;

    /**
     * @param string $id Unique identifier for this result, 1-64 bytes
     * @param string $mpeg4_file_id A valid file identifier for the MPEG4 file
     * @param string $title <em>Optional</em>. Title for the result
     * @param string $caption <em>Optional</em>. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing
     * @param string $parse_mode <em>Optional</em>. Mode for parsing entities in the caption. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details.
     * @param MessageEntity[] $caption_entities <em>Optional</em>. List of special entities that appear in the caption, which can be specified instead of <em>parse_mode</em>
     * @param InlineKeyboardMarkup $reply_markup <em>Optional</em>. <a href="https://core.telegram.org/bots/features#inline-keyboards">Inline keyboard</a> attached to the message
     * @param InputMessageContent $input_message_content <em>Optional</em>. Content of the message to be sent instead of the video animation
     */
    public static function make(
        string $id,
        string $mpeg4_file_id,
        ?string $title = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?InlineKeyboardMarkup $reply_markup = null,
        ?InputMessageContent $input_message_content = null,
    ): static
    {
        return new static([
            'id' => $id,
            'mpeg4_file_id' => $mpeg4_file_id,
            'title' => $title,
            'caption' => $caption,
            'parse_mode' => $parse_mode,
            'caption_entities' => $caption_entities,
            'reply_markup' => $reply_markup,
            'input_message_content' => $input_message_content,
        ]);
    }
}
