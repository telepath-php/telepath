<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object defines the criteria used to request a suitable chat. The identifier of the selected chat will be shared with the bot when the corresponding button is pressed.
 */
class KeyboardButtonRequestChat extends Type
{
    /** Signed 32-bit identifier of the request, which will be received back in the ChatShared object. Must be unique within the message */
    public int $request_id;

    /** Pass True to request a channel chat, pass False to request a group or a supergroup chat. */
    public bool $chat_is_channel;

    /** Optional. Pass True to request a forum supergroup, pass False to request a non-forum chat. If not specified, no additional restrictions are applied. */
    public ?bool $chat_is_forum = null;

    /** Optional. Pass True to request a supergroup or a channel with a username, pass False to request a chat without a username. If not specified, no additional restrictions are applied. */
    public ?bool $chat_has_username = null;

    /** Optional. Pass True to request a chat owned by the user. Otherwise, no additional restrictions are applied. */
    public ?bool $chat_is_created = null;

    /** Optional. A JSON-serialized object listing the required administrator rights of the user in the chat. The rights must be a superset of bot_administrator_rights. If not specified, no additional restrictions are applied. */
    public ?ChatAdministratorRights $user_administrator_rights = null;

    /** Optional. A JSON-serialized object listing the required administrator rights of the bot in the chat. The rights must be a subset of user_administrator_rights. If not specified, no additional restrictions are applied. */
    public ?ChatAdministratorRights $bot_administrator_rights = null;

    /** Optional. Pass True to request a chat with the bot as a member. Otherwise, no additional restrictions are applied. */
    public ?bool $bot_is_member = null;

    /**
     * @param int $request_id Signed 32-bit identifier of the request, which will be received back in the ChatShared object. Must be unique within the message
     * @param bool $chat_is_channel Pass True to request a channel chat, pass False to request a group or a supergroup chat.
     * @param bool $chat_is_forum Optional. Pass True to request a forum supergroup, pass False to request a non-forum chat. If not specified, no additional restrictions are applied.
     * @param bool $chat_has_username Optional. Pass True to request a supergroup or a channel with a username, pass False to request a chat without a username. If not specified, no additional restrictions are applied.
     * @param bool $chat_is_created Optional. Pass True to request a chat owned by the user. Otherwise, no additional restrictions are applied.
     * @param ChatAdministratorRights $user_administrator_rights Optional. A JSON-serialized object listing the required administrator rights of the user in the chat. The rights must be a superset of bot_administrator_rights. If not specified, no additional restrictions are applied.
     * @param ChatAdministratorRights $bot_administrator_rights Optional. A JSON-serialized object listing the required administrator rights of the bot in the chat. The rights must be a subset of user_administrator_rights. If not specified, no additional restrictions are applied.
     * @param bool $bot_is_member Optional. Pass True to request a chat with the bot as a member. Otherwise, no additional restrictions are applied.
     */
    public static function make(
        int $request_id,
        bool $chat_is_channel,
        ?bool $chat_is_forum = null,
        ?bool $chat_has_username = null,
        ?bool $chat_is_created = null,
        ?ChatAdministratorRights $user_administrator_rights = null,
        ?ChatAdministratorRights $bot_administrator_rights = null,
        ?bool $bot_is_member = null,
    ): static {
        return new static([
            'request_id' => $request_id,
            'chat_is_channel' => $chat_is_channel,
            'chat_is_forum' => $chat_is_forum,
            'chat_has_username' => $chat_has_username,
            'chat_is_created' => $chat_is_created,
            'user_administrator_rights' => $user_administrator_rights,
            'bot_administrator_rights' => $bot_administrator_rights,
            'bot_is_member' => $bot_is_member,
        ]);
    }
}
