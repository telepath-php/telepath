<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object defines the criteria used to request a suitable user. The identifier of the selected user will be shared with the bot when the corresponding button is pressed. More about requesting users »
 */
class KeyboardButtonRequestUser extends Type
{
    /** Signed 32-bit identifier of the request, which will be received back in the <a href="https://core.telegram.org/bots/api#usershared">UserShared</a> object. Must be unique within the message */
    public int $request_id;

    /** <em>Optional</em>. Pass <em>True</em> to request a bot, pass <em>False</em> to request a regular user. If not specified, no additional restrictions are applied. */
    public ?bool $user_is_bot = null;

    /** <em>Optional</em>. Pass <em>True</em> to request a premium user, pass <em>False</em> to request a non-premium user. If not specified, no additional restrictions are applied. */
    public ?bool $user_is_premium = null;

    /**
     * @param  int  $request_id Signed 32-bit identifier of the request, which will be received back in the <a href="https://core.telegram.org/bots/api#usershared">UserShared</a> object. Must be unique within the message
     * @param  bool  $user_is_bot <em>Optional</em>. Pass <em>True</em> to request a bot, pass <em>False</em> to request a regular user. If not specified, no additional restrictions are applied.
     * @param  bool  $user_is_premium <em>Optional</em>. Pass <em>True</em> to request a premium user, pass <em>False</em> to request a non-premium user. If not specified, no additional restrictions are applied.
     */
    public static function make(int $request_id, bool $user_is_bot = null, bool $user_is_premium = null): static
    {
        return new static([
            'request_id' => $request_id,
            'user_is_bot' => $user_is_bot,
            'user_is_premium' => $user_is_premium,
        ]);
    }
}
