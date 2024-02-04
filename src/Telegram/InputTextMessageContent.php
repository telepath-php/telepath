<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents the content of a text message to be sent as the result of an inline query.
 */
class InputTextMessageContent extends InputMessageContent
{
    /** Text of the message to be sent, 1-4096 characters */
    public string $message_text;

    /** <em>Optional</em>. Mode for parsing entities in the message text. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details. */
    public ?string $parse_mode = null;

    /**
     * <em>Optional</em>. List of special entities that appear in message text, which can be specified instead of <em>parse_mode</em>
     *
     * @var MessageEntity[]
     */
    public ?array $entities = null;

    /** <em>Optional</em>. Link preview generation options for the message */
    public ?LinkPreviewOptions $link_preview_options = null;

    /**
     * @param  string  $message_text  Text of the message to be sent, 1-4096 characters
     * @param  string  $parse_mode  <em>Optional</em>. Mode for parsing entities in the message text. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]  $entities  <em>Optional</em>. List of special entities that appear in message text, which can be specified instead of <em>parse_mode</em>
     * @param  LinkPreviewOptions  $link_preview_options  <em>Optional</em>. Link preview generation options for the message
     */
    public static function make(
        string $message_text,
        ?string $parse_mode = null,
        ?array $entities = null,
        ?LinkPreviewOptions $link_preview_options = null,
    ): static {
        return new static([
            'message_text' => $message_text,
            'parse_mode' => $parse_mode,
            'entities' => $entities,
            'link_preview_options' => $link_preview_options,
        ]);
    }
}
