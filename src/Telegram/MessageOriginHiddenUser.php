<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * The message was originally sent by an unknown user.
 */
class MessageOriginHiddenUser extends MessageOrigin
{
    /** Type of the message origin, always “hidden_user” */
    public string $type = 'hidden_user';

    /** Name of the user that sent the message originally */
    public string $sender_user_name;

    /**
     * @param  int  $date Date the message was sent originally in Unix time
     * @param  string  $sender_user_name Name of the user that sent the message originally
     */
    public static function make(int $date, string $sender_user_name): static
    {
        return new static([
            'date' => $date,
            'sender_user_name' => $sender_user_name,
        ]);
    }
}
