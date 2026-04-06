<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object contains information about the bot that was created to be managed by the current bot.
 */
class ManagedBotCreated extends Type
{
    /** Information about the bot. The bot's token can be fetched using the method <a href="https://core.telegram.org/bots/api#getmanagedbottoken">getManagedBotToken</a>. */
    public User $bot;

    /**
     * @param  User  $bot  Information about the bot. The bot's token can be fetched using the method <a href="https://core.telegram.org/bots/api#getmanagedbottoken">getManagedBotToken</a>.
     */
    public static function make(User $bot): static
    {
        return new static([
            'bot' => $bot,
        ]);
    }
}
