<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a bot command.
 */
class BotCommand extends Type
{
    /** Text of the command; 1-32 characters. Can contain only lowercase English letters, digits and underscores. */
    public string $command;

    /** Description of the command; 1-256 characters. */
    public string $description;

    /**
     * @param  string  $command  Text of the command; 1-32 characters. Can contain only lowercase English letters, digits and underscores.
     * @param  string  $description  Description of the command; 1-256 characters.
     */
    public static function make(string $command, string $description): static
    {
        return new static([
            'command' => $command,
            'description' => $description,
        ]);
    }
}
