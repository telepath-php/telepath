<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents an inline button that switches the current user to inline mode in a chosen chat, with an optional default inline query.
 */
class SwitchInlineQueryChosenChat extends Type
{
    /** <em>Optional</em>. The default inline query to be inserted in the input field. If left empty, only the bot's username will be inserted */
    public ?string $query = null;

    /** <em>Optional</em>. <em>True</em>, if private chats with users can be chosen */
    public ?bool $allow_user_chats = null;

    /** <em>Optional</em>. <em>True</em>, if private chats with bots can be chosen */
    public ?bool $allow_bot_chats = null;

    /** <em>Optional</em>. <em>True</em>, if group and supergroup chats can be chosen */
    public ?bool $allow_group_chats = null;

    /** <em>Optional</em>. <em>True</em>, if channel chats can be chosen */
    public ?bool $allow_channel_chats = null;

    /**
     * @param  string  $query  <em>Optional</em>. The default inline query to be inserted in the input field. If left empty, only the bot's username will be inserted
     * @param  bool  $allow_user_chats  <em>Optional</em>. <em>True</em>, if private chats with users can be chosen
     * @param  bool  $allow_bot_chats  <em>Optional</em>. <em>True</em>, if private chats with bots can be chosen
     * @param  bool  $allow_group_chats  <em>Optional</em>. <em>True</em>, if group and supergroup chats can be chosen
     * @param  bool  $allow_channel_chats  <em>Optional</em>. <em>True</em>, if channel chats can be chosen
     */
    public static function make(
        ?string $query = null,
        ?bool $allow_user_chats = null,
        ?bool $allow_bot_chats = null,
        ?bool $allow_group_chats = null,
        ?bool $allow_channel_chats = null,
    ): static {
        return new static([
            'query' => $query,
            'allow_user_chats' => $allow_user_chats,
            'allow_bot_chats' => $allow_bot_chats,
            'allow_group_chats' => $allow_group_chats,
            'allow_channel_chats' => $allow_channel_chats,
        ]);
    }
}
