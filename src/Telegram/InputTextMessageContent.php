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

    /** Optional. Mode for parsing entities in the message text. See formatting options for more details. */
    public ?string $parse_mode = null;

    /**
     * Optional. List of special entities that appear in message text, which can be specified instead of parse_mode
     * @var MessageEntity[]
     */
    public ?array $entities = null;

    /** Optional. Disables link previews for links in the sent message */
    public ?bool $disable_web_page_preview = null;

    /**
     * @param string $message_text Text of the message to be sent, 1-4096 characters
     * @param string $parse_mode Optional. Mode for parsing entities in the message text. See formatting options for more details.
     * @param MessageEntity[] $entities Optional. List of special entities that appear in message text, which can be specified instead of parse_mode
     * @param bool $disable_web_page_preview Optional. Disables link previews for links in the sent message
     */
    public static function make(
        string $message_text,
        ?string $parse_mode = null,
        ?array $entities = null,
        ?bool $disable_web_page_preview = null
    ): static {
        return new static([
            'message_text' => $message_text,
            'parse_mode' => $parse_mode,
            'entities' => $entities,
            'disable_web_page_preview' => $disable_web_page_preview,
        ]);
    }
}
