<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Types\Extensions;

use Telepath\Support\ParseMode\ParseMode;
use Telepath\Telegram\ForceReply;
use Telepath\Telegram\InlineKeyboardMarkup;
use Telepath\Telegram\LinkPreviewOptions;
use Telepath\Telegram\MessageEntity;
use Telepath\Telegram\ReplyKeyboardMarkup;
use Telepath\Telegram\ReplyKeyboardRemove;
use Telepath\Telegram\ReplyParameters;
use Telepath\Telegram\SuggestedPostParameters;

trait RepliesToMessage
{
    /**
     * @param  string  $business_connection_id  Unique identifier of the business connection on behalf of which the message will be sent
     * @param  int  $message_thread_id  Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     * @param  int  $direct_messages_topic_id  Identifier of the direct messages topic to which the message will be sent; required if the message is sent to a direct messages chat
     * @param  string  $text  Text of the message to be sent, 1-4096 characters after entities parsing
     * @param  ParseMode|string  $parse_mode  Mode for parsing entities in the message text. See <a href="https://core.telegram.org/bots/api#formatting-options">formatting options</a> for more details.
     * @param  MessageEntity[]  $entities  A JSON-serialized list of special entities that appear in message text, which can be specified instead of <em>parse_mode</em>
     * @param  LinkPreviewOptions  $link_preview_options  Link preview generation options for the message
     * @param  bool  $disable_notification  Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.
     * @param  bool  $protect_content  Protects the contents of the sent message from forwarding and saving
     * @param  bool  $allow_paid_broadcast  Pass <em>True</em> to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     * @param  string  $message_effect_id  Unique identifier of the message effect to be added to the message; for private chats only
     * @param  SuggestedPostParameters  $suggested_post_parameters  A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only. If the message is sent as a reply to another suggested post, then that suggested post is automatically declined.
     * @param  ReplyParameters  $reply_parameters  Description of the message to reply to
     * @param  InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply  $reply_markup  Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user
     */
    public function replyToUser(
        ?string $business_connection_id,
        ?int $message_thread_id,
        ?int $direct_messages_topic_id,
        string $text,
        ParseMode|string|null $parse_mode = null,
        ?array $entities = null,
        ?LinkPreviewOptions $link_preview_options = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?bool $allow_paid_broadcast = null,
        ?string $message_effect_id = null,
        ?SuggestedPostParameters $suggested_post_parameters = null,
        ?ReplyParameters $reply_parameters = null,
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup = null,
    ): \Telepath\Telegram\Message {
        return $this->sendMessage(
            chat_id: $this->user()->id,
            business_connection_id: $business_connection_id,
            message_thread_id: $message_thread_id,
            direct_messages_topic_id: $direct_messages_topic_id,
            text: $text,
            parse_mode: $parse_mode,
            entities: $entities,
            link_preview_options: $link_preview_options,
            disable_notification: $disable_notification,
            protect_content: $protect_content,
            allow_paid_broadcast: $allow_paid_broadcast,
            message_effect_id: $message_effect_id,
            suggested_post_parameters: $suggested_post_parameters,
            reply_parameters: $reply_parameters,
            reply_markup: $reply_markup,
        );
    }
}
