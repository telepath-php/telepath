<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object defines the criteria used to request a suitable chat. Information about the selected chat will be shared with the bot when the corresponding button is pressed. The bot will be granted requested rights in the chat if appropriate. More about requesting chats ».
 */
class KeyboardButtonRequestChat extends Type
{
    /** Signed 32-bit identifier of the request, which will be received back in the <a href="https://core.telegram.org/bots/api#chatshared">ChatShared</a> object. Must be unique within the message */
    public int $request_id;

    /** Pass <em>True</em> to request a channel chat, pass <em>False</em> to request a group or a supergroup chat. */
    public bool $chat_is_channel;

    /** <em>Optional</em>. Pass <em>True</em> to request a forum supergroup, pass <em>False</em> to request a non-forum chat. If not specified, no additional restrictions are applied. */
    public ?bool $chat_is_forum = null;

    /** <em>Optional</em>. Pass <em>True</em> to request a supergroup or a channel with a username, pass <em>False</em> to request a chat without a username. If not specified, no additional restrictions are applied. */
    public ?bool $chat_has_username = null;

    /** <em>Optional</em>. Pass <em>True</em> to request a chat owned by the user. Otherwise, no additional restrictions are applied. */
    public ?bool $chat_is_created = null;

    /** <em>Optional</em>. A JSON-serialized object listing the required administrator rights of the user in the chat. The rights must be a superset of <em>bot_administrator_rights</em>. If not specified, no additional restrictions are applied. */
    public ?ChatAdministratorRights $user_administrator_rights = null;

    /** <em>Optional</em>. A JSON-serialized object listing the required administrator rights of the bot in the chat. The rights must be a subset of <em>user_administrator_rights</em>. If not specified, no additional restrictions are applied. */
    public ?ChatAdministratorRights $bot_administrator_rights = null;

    /** <em>Optional</em>. Pass <em>True</em> to request a chat with the bot as a member. Otherwise, no additional restrictions are applied. */
    public ?bool $bot_is_member = null;

    /** <em>Optional</em>. Pass <em>True</em> to request the chat's title */
    public ?bool $request_title = null;

    /** <em>Optional</em>. Pass <em>True</em> to request the chat's username */
    public ?bool $request_username = null;

    /** <em>Optional</em>. Pass <em>True</em> to request the chat's photo */
    public ?bool $request_photo = null;

    /**
     * @param  int  $request_id  Signed 32-bit identifier of the request, which will be received back in the <a href="https://core.telegram.org/bots/api#chatshared">ChatShared</a> object. Must be unique within the message
     * @param  bool  $chat_is_channel  Pass <em>True</em> to request a channel chat, pass <em>False</em> to request a group or a supergroup chat.
     * @param  bool  $chat_is_forum  <em>Optional</em>. Pass <em>True</em> to request a forum supergroup, pass <em>False</em> to request a non-forum chat. If not specified, no additional restrictions are applied.
     * @param  bool  $chat_has_username  <em>Optional</em>. Pass <em>True</em> to request a supergroup or a channel with a username, pass <em>False</em> to request a chat without a username. If not specified, no additional restrictions are applied.
     * @param  bool  $chat_is_created  <em>Optional</em>. Pass <em>True</em> to request a chat owned by the user. Otherwise, no additional restrictions are applied.
     * @param  ChatAdministratorRights  $user_administrator_rights  <em>Optional</em>. A JSON-serialized object listing the required administrator rights of the user in the chat. The rights must be a superset of <em>bot_administrator_rights</em>. If not specified, no additional restrictions are applied.
     * @param  ChatAdministratorRights  $bot_administrator_rights  <em>Optional</em>. A JSON-serialized object listing the required administrator rights of the bot in the chat. The rights must be a subset of <em>user_administrator_rights</em>. If not specified, no additional restrictions are applied.
     * @param  bool  $bot_is_member  <em>Optional</em>. Pass <em>True</em> to request a chat with the bot as a member. Otherwise, no additional restrictions are applied.
     * @param  bool  $request_title  <em>Optional</em>. Pass <em>True</em> to request the chat's title
     * @param  bool  $request_username  <em>Optional</em>. Pass <em>True</em> to request the chat's username
     * @param  bool  $request_photo  <em>Optional</em>. Pass <em>True</em> to request the chat's photo
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
        ?bool $request_title = null,
        ?bool $request_username = null,
        ?bool $request_photo = null,
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
            'request_title' => $request_title,
            'request_username' => $request_username,
            'request_photo' => $request_photo,
        ]);
    }
}
