<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents a link to an MP3 audio file. By default, this audio file will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the audio.
 */
class InlineQueryResultAudio extends InlineQueryResult
{
    /** Type of the result, must be audio */
    public string $type = 'audio';

    /** A valid URL for the audio file */
    public string $audio_url;

    /** Title */
    public string $title;

    /** Optional. Caption, 0-1024 characters after entities parsing */
    public ?string $caption = null;

    /** Optional. Mode for parsing entities in the audio caption. See formatting options for more details. */
    public ?string $parse_mode = null;

    /**
     * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @var MessageEntity[]
     */
    public ?array $caption_entities = null;

    /** Optional. Performer */
    public ?string $performer = null;

    /** Optional. Audio duration in seconds */
    public ?int $audio_duration = null;

    /** Optional. Content of the message to be sent instead of the audio */
    public ?InputMessageContent $input_message_content = null;

    /**
     * @param string $id Unique identifier for this result, 1-64 bytes
     * @param string $audio_url A valid URL for the audio file
     * @param string $title Title
     * @param string $caption Optional. Caption, 0-1024 characters after entities parsing
     * @param string $parse_mode Optional. Mode for parsing entities in the audio caption. See formatting options for more details.
     * @param MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param string $performer Optional. Performer
     * @param int $audio_duration Optional. Audio duration in seconds
     * @param InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message
     * @param InputMessageContent $input_message_content Optional. Content of the message to be sent instead of the audio
     */
    public static function make(
        string $id,
        string $audio_url,
        string $title,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?string $performer = null,
        ?int $audio_duration = null,
        ?InlineKeyboardMarkup $reply_markup = null,
        ?InputMessageContent $input_message_content = null
    ): static {
        return new static([
            'id' => $id,
            'audio_url' => $audio_url,
            'title' => $title,
            'caption' => $caption,
            'parse_mode' => $parse_mode,
            'caption_entities' => $caption_entities,
            'performer' => $performer,
            'audio_duration' => $audio_duration,
            'reply_markup' => $reply_markup,
            'input_message_content' => $input_message_content,
        ]);
    }
}
