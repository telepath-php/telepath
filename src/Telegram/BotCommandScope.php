<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Bot;
use Telepath\Types\Factory;
use Telepath\Types\Type;

/**
 * This object represents the scope to which bot commands are applied. Currently, the following 7 scopes are supported:
 */
abstract class BotCommandScope extends Type implements Factory
{
    /** Scope type */
    public string $type;

    public static function factory(array $data, Bot $bot = null): self
    {
        return match ($data['type']) {
            'default' => new BotCommandScopeDefault($data, $bot),
            'all_private_chats' => new BotCommandScopeAllPrivateChats($data, $bot),
            'all_group_chats' => new BotCommandScopeAllGroupChats($data, $bot),
            'all_chat_administrators' => new BotCommandScopeAllChatAdministrators($data, $bot),
            'chat' => new BotCommandScopeChat($data, $bot),
            'chat_administrators' => new BotCommandScopeChatAdministrators($data, $bot),
            'chat_member' => new BotCommandScopeChatMember($data, $bot),
        };
    }
}
