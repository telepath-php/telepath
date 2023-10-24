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

    /** <em>Optional</em>. Disables link previews for links in the sent message */
    public ?bool $disable_web_page_preview = null;

    /**
     * @param  string  $message_text Text of the message to be sent, 1-4096 characters
     * @param  string  $parse_mode <em>Optional</em>. Mode for parsing entities in the message text. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]  $entities <em>Optional</em>. List of special entities that appear in message text, which can be specified instead of <em>parse_mode</em>
     * @param  bool  $disable_web_page_preview <em>Optional</em>. Disables link previews for links in the sent message
     */
    public static function make(
        string $message_text,
        string $parse_mode = null,
        array $entities = null,
        bool $disable_web_page_preview = null,
    ): static {
        return new static([
            'message_text' => $message_text,
            'parse_mode' => $parse_mode,
            'entities' => $entities,
            'disable_web_page_preview' => $disable_web_page_preview,
        ]);
    }
}
