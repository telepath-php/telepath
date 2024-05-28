<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Support\ParseMode\ParseMode;

/**
 * Represents a link to a file stored on the Telegram servers. By default, this file will be sent by the user with an optional caption. Alternatively, you can use <em>input_message_content</em> to send a message with the specified content instead of the file.
 */
class InlineQueryResultCachedDocument extends InlineQueryResult
{
    /** Type of the result, must be <em>document</em> */
    public string $type = 'document';

    /** Title for the result */
    public string $title;

    /** A valid file identifier for the file */
    public string $document_file_id;

    /** <em>Optional</em>. Short description of the result */
    public ?string $description = null;

    /** <em>Optional</em>. Caption of the document to be sent, 0-1024 characters after entities parsing */
    public ?string $caption = null;

    /** <em>Optional</em>. Mode for parsing entities in the document caption. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details. */
    public ParseMode|string|null $parse_mode = null;

    /**
     * <em>Optional</em>. List of special entities that appear in the caption, which can be specified instead of <em>parse_mode</em>
     *
     * @var MessageEntity[]
     */
    public ?array $caption_entities = null;

    /** <em>Optional</em>. Content of the message to be sent instead of the file */
    public ?InputMessageContent $input_message_content = null;

    /**
     * @param  string  $id  Unique identifier for this result, 1-64 bytes
     * @param  string  $title  Title for the result
     * @param  string  $document_file_id  A valid file identifier for the file
     * @param  string  $description  <em>Optional</em>. Short description of the result
     * @param  string  $caption  <em>Optional</em>. Caption of the document to be sent, 0-1024 characters after entities parsing
     * @param  ParseMode|string  $parse_mode  <em>Optional</em>. Mode for parsing entities in the document caption. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]  $caption_entities  <em>Optional</em>. List of special entities that appear in the caption, which can be specified instead of <em>parse_mode</em>
     * @param  InlineKeyboardMarkup  $reply_markup  <em>Optional</em>. <a href="https://core.telegram.org/bots/features#inline-keyboards">Inline keyboard</a> attached to the message
     * @param  InputMessageContent  $input_message_content  <em>Optional</em>. Content of the message to be sent instead of the file
     */
    public static function make(
        string $id,
        string $title,
        string $document_file_id,
        ?string $description = null,
        ?string $caption = null,
        ParseMode|string|null $parse_mode = null,
        ?array $caption_entities = null,
        ?InlineKeyboardMarkup $reply_markup = null,
        ?InputMessageContent $input_message_content = null,
    ): static {
        return new static([
            'id' => $id,
            'title' => $title,
            'document_file_id' => $document_file_id,
            'description' => $description,
            'caption' => $caption,
            'parse_mode' => $parse_mode,
            'caption_entities' => $caption_entities,
            'reply_markup' => $reply_markup,
            'input_message_content' => $input_message_content,
        ]);
    }
}
