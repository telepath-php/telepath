<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents an incoming update.At most one of the optional parameters can be present in any given update.
 */
class Update extends \Tii\Telepath\Type
{
	/** The update's unique identifier. Update identifiers start from a certain positive number and increase sequentially. This ID becomes especially handy if you're using Webhooks, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially. */
	public int $update_id;

	/** Optional. New incoming message of any kind — text, photo, sticker, etc. */
	public ?Message $message = null;

	/** Optional. New version of a message that is known to the bot and was edited */
	public ?Message $edited_message = null;

	/** Optional. New incoming channel post of any kind — text, photo, sticker, etc. */
	public ?Message $channel_post = null;

	/** Optional. New version of a channel post that is known to the bot and was edited */
	public ?Message $edited_channel_post = null;

	/** Optional. New incoming inline query */
	public ?InlineQuery $inline_query = null;

	/** Optional. The result of an inline query that was chosen by a user and sent to their chat partner. Please see our documentation on the feedback collecting for details on how to enable these updates for your bot. */
	public ?ChosenInlineResult $chosen_inline_result = null;

	/** Optional. New incoming callback query */
	public ?CallbackQuery $callback_query = null;

	/** Optional. New incoming shipping query. Only for invoices with flexible price */
	public ?ShippingQuery $shipping_query = null;

	/** Optional. New incoming pre-checkout query. Contains full information about checkout */
	public ?PreCheckoutQuery $pre_checkout_query = null;

	/** Optional. New poll state. Bots receive only updates about stopped polls and polls, which are sent by the bot */
	public ?Poll $poll = null;

	/** Optional. A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself. */
	public ?PollAnswer $poll_answer = null;

	/** Optional. The bot's chat member status was updated in a chat. For private chats, this update is received only when the bot is blocked or unblocked by the user. */
	public ?ChatMemberUpdated $my_chat_member = null;

	/** Optional. A chat member's status was updated in a chat. The bot must be an administrator in the chat and must explicitly specify “chat_member” in the list of allowed_updates to receive these updates. */
	public ?ChatMemberUpdated $chat_member = null;

	/** Optional. A request to join the chat has been sent. The bot must have the can_invite_users administrator right in the chat to receive these updates. */
	public ?ChatJoinRequest $chat_join_request = null;


	/**
	 * @param int $update_id The update's unique identifier. Update identifiers start from a certain positive number and increase sequentially. This ID becomes especially handy if you're using Webhooks, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially.
	 * @param Message $message Optional. New incoming message of any kind — text, photo, sticker, etc.
	 * @param Message $edited_message Optional. New version of a message that is known to the bot and was edited
	 * @param Message $channel_post Optional. New incoming channel post of any kind — text, photo, sticker, etc.
	 * @param Message $edited_channel_post Optional. New version of a channel post that is known to the bot and was edited
	 * @param InlineQuery $inline_query Optional. New incoming inline query
	 * @param ChosenInlineResult $chosen_inline_result Optional. The result of an inline query that was chosen by a user and sent to their chat partner. Please see our documentation on the feedback collecting for details on how to enable these updates for your bot.
	 * @param CallbackQuery $callback_query Optional. New incoming callback query
	 * @param ShippingQuery $shipping_query Optional. New incoming shipping query. Only for invoices with flexible price
	 * @param PreCheckoutQuery $pre_checkout_query Optional. New incoming pre-checkout query. Contains full information about checkout
	 * @param Poll $poll Optional. New poll state. Bots receive only updates about stopped polls and polls, which are sent by the bot
	 * @param PollAnswer $poll_answer Optional. A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself.
	 * @param ChatMemberUpdated $my_chat_member Optional. The bot's chat member status was updated in a chat. For private chats, this update is received only when the bot is blocked or unblocked by the user.
	 * @param ChatMemberUpdated $chat_member Optional. A chat member's status was updated in a chat. The bot must be an administrator in the chat and must explicitly specify “chat_member” in the list of allowed_updates to receive these updates.
	 * @param ChatJoinRequest $chat_join_request Optional. A request to join the chat has been sent. The bot must have the can_invite_users administrator right in the chat to receive these updates.
	 */
	public static function make(
		int $update_id,
		?Message $message = null,
		?Message $edited_message = null,
		?Message $channel_post = null,
		?Message $edited_channel_post = null,
		?InlineQuery $inline_query = null,
		?ChosenInlineResult $chosen_inline_result = null,
		?CallbackQuery $callback_query = null,
		?ShippingQuery $shipping_query = null,
		?PreCheckoutQuery $pre_checkout_query = null,
		?Poll $poll = null,
		?PollAnswer $poll_answer = null,
		?ChatMemberUpdated $my_chat_member = null,
		?ChatMemberUpdated $chat_member = null,
		?ChatJoinRequest $chat_join_request = null
	): static {
		return new static([
		    'update_id' => $update_id,
		    'message' => $message,
		    'edited_message' => $edited_message,
		    'channel_post' => $channel_post,
		    'edited_channel_post' => $edited_channel_post,
		    'inline_query' => $inline_query,
		    'chosen_inline_result' => $chosen_inline_result,
		    'callback_query' => $callback_query,
		    'shipping_query' => $shipping_query,
		    'pre_checkout_query' => $pre_checkout_query,
		    'poll' => $poll,
		    'poll_answer' => $poll_answer,
		    'my_chat_member' => $my_chat_member,
		    'chat_member' => $chat_member,
		    'chat_join_request' => $chat_join_request,
		]);
	}
}
