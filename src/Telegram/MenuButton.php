<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Factory;
use Telepath\Types\Type;

/**
 * This object describes the bot's menu button in a private chat. It should be one of
 */
abstract class MenuButton extends Type implements Factory
{
    /** Type of the button */
    public string $type;

    public static function factory(array $data): self
    {
        return match($data['type']) {
            'commands' => new MenuButtonCommands($data),
            'web_app' => new MenuButtonWebApp($data),
            'default' => new MenuButtonDefault($data),
        };
    }
}
