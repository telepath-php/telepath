<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents the scope to which bot commands are applied. Currently, the following 7 scopes are supported:
 */
abstract class BotCommandScope extends \Tii\Telepath\Types\Type
{
    /** Scope type */
    public string $type;

    public static function factory(array $data): static
    {
        return match($data['type']) {
            'default' => new BotCommandScopeDefault($data)
            'all_private_chats' => new BotCommandScopeAllPrivateChats($data)
            'all_group_chats' => new BotCommandScopeAllGroupChats($data)
            'all_chat_administrators' => new BotCommandScopeAllChatAdministrators($data)
            'chat' => new BotCommandScopeChat($data)
            'chat_administrators' => new BotCommandScopeChatAdministrators($data)
            'chat_member' => new BotCommandScopeChatMember($data)
        };
    }
}
