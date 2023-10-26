<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Types\Extensions;

use Telepath\Telegram\ForceReply;
use Telepath\Telegram\InlineKeyboardMarkup;
use Telepath\Telegram\MessageEntity;
use Telepath\Telegram\ReplyKeyboardMarkup;
use Telepath\Telegram\ReplyKeyboardRemove;

trait RepliesToMessage
{
    /**
     * @param int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @param string $text Text of the message to be sent, 1-4096 characters after entities parsing
     * @param string $parse_mode Mode for parsing entities in the message text. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details.
     * @param MessageEntity[] $entities A JSON-serialized list of special entities that appear in message text, which can be specified instead of <em>parse_mode</em>
     * @param bool $disable_web_page_preview Disables link previews for links in this message
     * @param bool $disable_notification Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.
     * @param bool $protect_content Protects the contents of the sent message from forwarding and saving
     * @param int $reply_to_message_id If the message is a reply, ID of the original message
     * @param bool $allow_sending_without_reply Pass <em>True</em> if the message should be sent even if the specified replied-to message is not found
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove reply keyboard or to force a reply from the user.
     */
    public function replyToUser(
        ?int $message_thread_id = null,
        string $text,
        ?string $parse_mode = null,
        ?array $entities = null,
        ?bool $disable_web_page_preview = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): \Telepath\Telegram\Message
    {
        return $this->sendMessage(
            chat_id: $this->user()->id,
            message_thread_id: $message_thread_id,
            text: $text,
            parse_mode: $parse_mode,
            entities: $entities,
            disable_web_page_preview: $disable_web_page_preview,
            disable_notification: $disable_notification,
            protect_content: $protect_content,
            reply_to_message_id: $reply_to_message_id,
            allow_sending_without_reply: $allow_sending_without_reply,
            reply_markup: $reply_markup,
        );
    }
}
