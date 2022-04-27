<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class Update extends \Tii\Telepath\Type
{
    public readonly int $update_id;

    public readonly Message $message;

    public readonly Message $edited_message;

    public readonly Message $channel_post;

    public readonly Message $edited_channel_post;

    public readonly InlineQuery $inline_query;

    public readonly ChosenInlineResult $chosen_inline_result;

    public readonly CallbackQuery $callback_query;

    public readonly ShippingQuery $shipping_query;

    public readonly PreCheckoutQuery $pre_checkout_query;

    public readonly Poll $poll;

    public readonly PollAnswer $poll_answer;

    public readonly ChatMemberUpdated $my_chat_member;

    public readonly ChatMemberUpdated $chat_member;

    public readonly ChatJoinRequest $chat_join_request;
}

