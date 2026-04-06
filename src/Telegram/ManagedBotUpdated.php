<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object contains information about the creation, token update, or owner update of a bot that is managed by the current bot.
 */
class ManagedBotUpdated extends Type
{
    /** User that created the bot */
    public User $user;

    /** Information about the bot. Token of the bot can be fetched using the method <a href="https://core.telegram.org/bots/api#getmanagedbottoken">getManagedBotToken</a>. */
    public User $bot;

    /**
     * @param  User  $user  User that created the bot
     * @param  User  $bot  Information about the bot. Token of the bot can be fetched using the method <a href="https://core.telegram.org/bots/api#getmanagedbottoken">getManagedBotToken</a>.
     */
    public static function make(User $user, User $bot): static
    {
        return new static([
            'user' => $user,
            'bot' => $bot,
        ]);
    }
}
