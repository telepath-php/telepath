<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents a link to a video file stored on the Telegram servers. By default, this video file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the video.
 */
class InlineQueryResultCachedVideo extends InlineQueryResult
{
    /** Type of the result, must be video */
    public string $type = 'video';

    /** A valid file identifier for the video file */
    public string $video_file_id;

    /** Title for the result */
    public string $title;

    /** Optional. Short description of the result */
    public ?string $description = null;

    /** Optional. Caption of the video to be sent, 0-1024 characters after entities parsing */
    public ?string $caption = null;

    /** Optional. Mode for parsing entities in the video caption. See formatting options for more details. */
    public ?string $parse_mode = null;

    /**
     * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @var MessageEntity[]
     */
    public ?array $caption_entities = null;

    /** Optional. Content of the message to be sent instead of the video */
    public ?InputMessageContent $input_message_content = null;

    /**
     * @param string $id Unique identifier for this result, 1-64 bytes
     * @param string $video_file_id A valid file identifier for the video file
     * @param string $title Title for the result
     * @param string $description Optional. Short description of the result
     * @param string $caption Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
     * @param string $parse_mode Optional. Mode for parsing entities in the video caption. See formatting options for more details.
     * @param MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
     * @param InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the video
     */
    public static function make(
        string $id,
        string $video_file_id,
        string $title,
        ?string $description = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?InlineKeyboardMarkup $reply_markup = null,
        ?InputMessageContent $input_message_content = null
    ): static {
        return new static([
            'id' => $id,
            'video_file_id' => $video_file_id,
            'title' => $title,
            'description' => $description,
            'caption' => $caption,
            'parse_mode' => $parse_mode,
            'caption_entities' => $caption_entities,
            'reply_markup' => $reply_markup,
            'input_message_content' => $input_message_content,
        ]);
    }
}
