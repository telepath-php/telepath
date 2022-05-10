<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object describes the bot's menu button in a private chat. It should be one of
 */
abstract class MenuButton extends \Tii\Telepath\Types\Type
{
    /** Type of the button */
    public string $type;

    public static function factory(array $data): static
    {
        return match($data['type']) {
            'commands' => new MenuButtonCommands($data)
            'web_app' => new MenuButtonWebApp($data)
            'default' => new MenuButtonDefault($data)
        };
    }
}
