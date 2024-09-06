<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Extensions\UpdateExtension;
use Telepath\Types\Type;

/**
 * This object represents an incoming update.At most one of the optional parameters can be present in any given update.
 */
class Update extends Type
{
    use UpdateExtension;

    /** The update's unique identifier. Update identifiers start from a certain positive number and increase sequentially. This identifier becomes especially handy if you're using <a href="https://core.telegram.org/bots/api#setwebhook">webhooks</a>, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially. */
    public int $update_id;

    /** <em>Optional</em>. New incoming message of any kind - text, photo, sticker, etc. */
    public ?Message $message = null;

    /** <em>Optional</em>. New version of a message that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot. */
    public ?Message $edited_message = null;

    /** <em>Optional</em>. New incoming channel post of any kind - text, photo, sticker, etc. */
    public ?Message $channel_post = null;

    /** <em>Optional</em>. New version of a channel post that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot. */
    public ?Message $edited_channel_post = null;

    /** <em>Optional</em>. The bot was connected to or disconnected from a business account, or a user edited an existing connection with the bot */
    public ?BusinessConnection $business_connection = null;

    /** <em>Optional</em>. New message from a connected business account */
    public ?Message $business_message = null;

    /** <em>Optional</em>. New version of a message from a connected business account */
    public ?Message $edited_business_message = null;

    /** <em>Optional</em>. Messages were deleted from a connected business account */
    public ?BusinessMessagesDeleted $deleted_business_messages = null;

    /** <em>Optional</em>. A reaction to a message was changed by a user. The bot must be an administrator in the chat and must explicitly specify "message_reaction" in the list of <em>allowed_updates</em> to receive these updates. The update isn't received for reactions set by bots. */
    public ?MessageReactionUpdated $message_reaction = null;

    /** <em>Optional</em>. Reactions to a message with anonymous reactions were changed. The bot must be an administrator in the chat and must explicitly specify "message_reaction_count" in the list of <em>allowed_updates</em> to receive these updates. The updates are grouped and can be sent with delay up to a few minutes. */
    public ?MessageReactionCountUpdated $message_reaction_count = null;

    /** <em>Optional</em>. New incoming <a href="https://core.telegram.org/bots/api#inline-mode">inline</a> query */
    public ?InlineQuery $inline_query = null;

    /** <em>Optional</em>. The result of an <a href="https://core.telegram.org/bots/api#inline-mode">inline</a> query that was chosen by a user and sent to their chat partner. Please see our documentation on the <a href="https://core.telegram.org/bots/inline#collecting-feedback">feedback collecting</a> for details on how to enable these updates for your bot. */
    public ?ChosenInlineResult $chosen_inline_result = null;

    /** <em>Optional</em>. New incoming callback query */
    public ?CallbackQuery $callback_query = null;

    /** <em>Optional</em>. New incoming shipping query. Only for invoices with flexible price */
    public ?ShippingQuery $shipping_query = null;

    /** <em>Optional</em>. New incoming pre-checkout query. Contains full information about checkout */
    public ?PreCheckoutQuery $pre_checkout_query = null;

    /** <em>Optional</em>. A user purchased paid media with a non-empty payload sent by the bot in a non-channel chat */
    public ?PaidMediaPurchased $purchased_paid_media = null;

    /** <em>Optional</em>. New poll state. Bots receive only updates about manually stopped polls and polls, which are sent by the bot */
    public ?Poll $poll = null;

    /** <em>Optional</em>. A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself. */
    public ?PollAnswer $poll_answer = null;

    /** <em>Optional</em>. The bot's chat member status was updated in a chat. For private chats, this update is received only when the bot is blocked or unblocked by the user. */
    public ?ChatMemberUpdated $my_chat_member = null;

    /** <em>Optional</em>. A chat member's status was updated in a chat. The bot must be an administrator in the chat and must explicitly specify "chat_member" in the list of <em>allowed_updates</em> to receive these updates. */
    public ?ChatMemberUpdated $chat_member = null;

    /** <em>Optional</em>. A request to join the chat has been sent. The bot must have the <em>can_invite_users</em> administrator right in the chat to receive these updates. */
    public ?ChatJoinRequest $chat_join_request = null;

    /** <em>Optional</em>. A chat boost was added or changed. The bot must be an administrator in the chat to receive these updates. */
    public ?ChatBoostUpdated $chat_boost = null;

    /** <em>Optional</em>. A boost was removed from a chat. The bot must be an administrator in the chat to receive these updates. */
    public ?ChatBoostRemoved $removed_chat_boost = null;

    /**
     * @param  int  $update_id  The update's unique identifier. Update identifiers start from a certain positive number and increase sequentially. This identifier becomes especially handy if you're using <a href="https://core.telegram.org/bots/api#setwebhook">webhooks</a>, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially.
     * @param  Message  $message  <em>Optional</em>. New incoming message of any kind - text, photo, sticker, etc.
     * @param  Message  $edited_message  <em>Optional</em>. New version of a message that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot.
     * @param  Message  $channel_post  <em>Optional</em>. New incoming channel post of any kind - text, photo, sticker, etc.
     * @param  Message  $edited_channel_post  <em>Optional</em>. New version of a channel post that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot.
     * @param  BusinessConnection  $business_connection  <em>Optional</em>. The bot was connected to or disconnected from a business account, or a user edited an existing connection with the bot
     * @param  Message  $business_message  <em>Optional</em>. New message from a connected business account
     * @param  Message  $edited_business_message  <em>Optional</em>. New version of a message from a connected business account
     * @param  BusinessMessagesDeleted  $deleted_business_messages  <em>Optional</em>. Messages were deleted from a connected business account
     * @param  MessageReactionUpdated  $message_reaction  <em>Optional</em>. A reaction to a message was changed by a user. The bot must be an administrator in the chat and must explicitly specify "message_reaction" in the list of <em>allowed_updates</em> to receive these updates. The update isn't received for reactions set by bots.
     * @param  MessageReactionCountUpdated  $message_reaction_count  <em>Optional</em>. Reactions to a message with anonymous reactions were changed. The bot must be an administrator in the chat and must explicitly specify "message_reaction_count" in the list of <em>allowed_updates</em> to receive these updates. The updates are grouped and can be sent with delay up to a few minutes.
     * @param  InlineQuery  $inline_query  <em>Optional</em>. New incoming <a href="https://core.telegram.org/bots/api#inline-mode">inline</a> query
     * @param  ChosenInlineResult  $chosen_inline_result  <em>Optional</em>. The result of an <a href="https://core.telegram.org/bots/api#inline-mode">inline</a> query that was chosen by a user and sent to their chat partner. Please see our documentation on the <a href="https://core.telegram.org/bots/inline#collecting-feedback">feedback collecting</a> for details on how to enable these updates for your bot.
     * @param  CallbackQuery  $callback_query  <em>Optional</em>. New incoming callback query
     * @param  ShippingQuery  $shipping_query  <em>Optional</em>. New incoming shipping query. Only for invoices with flexible price
     * @param  PreCheckoutQuery  $pre_checkout_query  <em>Optional</em>. New incoming pre-checkout query. Contains full information about checkout
     * @param  PaidMediaPurchased  $purchased_paid_media  <em>Optional</em>. A user purchased paid media with a non-empty payload sent by the bot in a non-channel chat
     * @param  Poll  $poll  <em>Optional</em>. New poll state. Bots receive only updates about manually stopped polls and polls, which are sent by the bot
     * @param  PollAnswer  $poll_answer  <em>Optional</em>. A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself.
     * @param  ChatMemberUpdated  $my_chat_member  <em>Optional</em>. The bot's chat member status was updated in a chat. For private chats, this update is received only when the bot is blocked or unblocked by the user.
     * @param  ChatMemberUpdated  $chat_member  <em>Optional</em>. A chat member's status was updated in a chat. The bot must be an administrator in the chat and must explicitly specify "chat_member" in the list of <em>allowed_updates</em> to receive these updates.
     * @param  ChatJoinRequest  $chat_join_request  <em>Optional</em>. A request to join the chat has been sent. The bot must have the <em>can_invite_users</em> administrator right in the chat to receive these updates.
     * @param  ChatBoostUpdated  $chat_boost  <em>Optional</em>. A chat boost was added or changed. The bot must be an administrator in the chat to receive these updates.
     * @param  ChatBoostRemoved  $removed_chat_boost  <em>Optional</em>. A boost was removed from a chat. The bot must be an administrator in the chat to receive these updates.
     */
    public static function make(
        int $update_id,
        ?Message $message = null,
        ?Message $edited_message = null,
        ?Message $channel_post = null,
        ?Message $edited_channel_post = null,
        ?BusinessConnection $business_connection = null,
        ?Message $business_message = null,
        ?Message $edited_business_message = null,
        ?BusinessMessagesDeleted $deleted_business_messages = null,
        ?MessageReactionUpdated $message_reaction = null,
        ?MessageReactionCountUpdated $message_reaction_count = null,
        ?InlineQuery $inline_query = null,
        ?ChosenInlineResult $chosen_inline_result = null,
        ?CallbackQuery $callback_query = null,
        ?ShippingQuery $shipping_query = null,
        ?PreCheckoutQuery $pre_checkout_query = null,
        ?PaidMediaPurchased $purchased_paid_media = null,
        ?Poll $poll = null,
        ?PollAnswer $poll_answer = null,
        ?ChatMemberUpdated $my_chat_member = null,
        ?ChatMemberUpdated $chat_member = null,
        ?ChatJoinRequest $chat_join_request = null,
        ?ChatBoostUpdated $chat_boost = null,
        ?ChatBoostRemoved $removed_chat_boost = null,
    ): static {
        return new static([
            'update_id' => $update_id,
            'message' => $message,
            'edited_message' => $edited_message,
            'channel_post' => $channel_post,
            'edited_channel_post' => $edited_channel_post,
            'business_connection' => $business_connection,
            'business_message' => $business_message,
            'edited_business_message' => $edited_business_message,
            'deleted_business_messages' => $deleted_business_messages,
            'message_reaction' => $message_reaction,
            'message_reaction_count' => $message_reaction_count,
            'inline_query' => $inline_query,
            'chosen_inline_result' => $chosen_inline_result,
            'callback_query' => $callback_query,
            'shipping_query' => $shipping_query,
            'pre_checkout_query' => $pre_checkout_query,
            'purchased_paid_media' => $purchased_paid_media,
            'poll' => $poll,
            'poll_answer' => $poll_answer,
            'my_chat_member' => $my_chat_member,
            'chat_member' => $chat_member,
            'chat_join_request' => $chat_join_request,
            'chat_boost' => $chat_boost,
            'removed_chat_boost' => $removed_chat_boost,
        ]);
    }
}
