<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes reply parameters for the message that is being sent.
 */
class ReplyParameters extends Type
{
    /** Identifier of the message that will be replied to in the current chat, or in the chat <em>chat_id</em> if it is specified */
    public int $message_id;

    /** <em>Optional</em>. If the message to be replied to is from a different chat, unique identifier for the chat or username of the channel (in the format @channelusername) */
    public int|string|null $chat_id = null;

    /** <em>Optional</em>. Pass <em>True</em> if the message should be sent even if the specified message to be replied to is not found; can be used only for replies in the same chat and forum topic. */
    public ?bool $allow_sending_without_reply = null;

    /** <em>Optional</em>. Quoted part of the message to be replied to; 0-1024 characters after entities parsing. The quote must be an exact substring of the message to be replied to, including <em>bold</em>, <em>italic</em>, <em>underline</em>, <em>strikethrough</em>, <em>spoiler</em>, and <em>custom_emoji</em> entities. The message will fail to send if the quote isn't found in the original message. */
    public ?string $quote = null;

    /** <em>Optional</em>. Mode for parsing entities in the quote. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details. */
    public ?string $quote_parse_mode = null;

    /**
     * <em>Optional</em>. A JSON-serialized list of special entities that appear in the quote. It can be specified instead of <em>quote_parse_mode</em>.
     *
     * @var MessageEntity[]
     */
    public ?array $quote_entities = null;

    /** <em>Optional</em>. Position of the quote in the original message in UTF-16 code units */
    public ?int $quote_position = null;

    /**
     * @param  int  $message_id  Identifier of the message that will be replied to in the current chat, or in the chat <em>chat_id</em> if it is specified
     * @param  int|string  $chat_id  <em>Optional</em>. If the message to be replied to is from a different chat, unique identifier for the chat or username of the channel (in the format @channelusername)
     * @param  bool  $allow_sending_without_reply  <em>Optional</em>. Pass <em>True</em> if the message should be sent even if the specified message to be replied to is not found; can be used only for replies in the same chat and forum topic.
     * @param  string  $quote  <em>Optional</em>. Quoted part of the message to be replied to; 0-1024 characters after entities parsing. The quote must be an exact substring of the message to be replied to, including <em>bold</em>, <em>italic</em>, <em>underline</em>, <em>strikethrough</em>, <em>spoiler</em>, and <em>custom_emoji</em> entities. The message will fail to send if the quote isn't found in the original message.
     * @param  string  $quote_parse_mode  <em>Optional</em>. Mode for parsing entities in the quote. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]  $quote_entities  <em>Optional</em>. A JSON-serialized list of special entities that appear in the quote. It can be specified instead of <em>quote_parse_mode</em>.
     * @param  int  $quote_position  <em>Optional</em>. Position of the quote in the original message in UTF-16 code units
     */
    public static function make(
        int $message_id,
        int|string|null $chat_id = null,
        ?bool $allow_sending_without_reply = null,
        ?string $quote = null,
        ?string $quote_parse_mode = null,
        ?array $quote_entities = null,
        ?int $quote_position = null,
    ): static {
        return new static([
            'message_id' => $message_id,
            'chat_id' => $chat_id,
            'allow_sending_without_reply' => $allow_sending_without_reply,
            'quote' => $quote,
            'quote_parse_mode' => $quote_parse_mode,
            'quote_entities' => $quote_entities,
            'quote_position' => $quote_position,
        ]);
    }
}
