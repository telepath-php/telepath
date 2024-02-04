<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object defines the criteria used to request suitable users. The identifiers of the selected users will be shared with the bot when the corresponding button is pressed. More about requesting users »
 */
class KeyboardButtonRequestUsers extends Type
{
    /** Signed 32-bit identifier of the request that will be received back in the <a href="https://core.telegram.org/bots/api#usersshared">UsersShared</a> object. Must be unique within the message */
    public int $request_id;

    /** <em>Optional</em>. Pass <em>True</em> to request bots, pass <em>False</em> to request regular users. If not specified, no additional restrictions are applied. */
    public ?bool $user_is_bot = null;

    /** <em>Optional</em>. Pass <em>True</em> to request premium users, pass <em>False</em> to request non-premium users. If not specified, no additional restrictions are applied. */
    public ?bool $user_is_premium = null;

    /** <em>Optional</em>. The maximum number of users to be selected; 1-10. Defaults to 1. */
    public ?int $max_quantity = null;

    /**
     * @param  int  $request_id Signed 32-bit identifier of the request that will be received back in the <a href="https://core.telegram.org/bots/api#usersshared">UsersShared</a> object. Must be unique within the message
     * @param  bool  $user_is_bot <em>Optional</em>. Pass <em>True</em> to request bots, pass <em>False</em> to request regular users. If not specified, no additional restrictions are applied.
     * @param  bool  $user_is_premium <em>Optional</em>. Pass <em>True</em> to request premium users, pass <em>False</em> to request non-premium users. If not specified, no additional restrictions are applied.
     * @param  int  $max_quantity <em>Optional</em>. The maximum number of users to be selected; 1-10. Defaults to 1.
     */
    public static function make(
        int $request_id,
        bool $user_is_bot = null,
        bool $user_is_premium = null,
        int $max_quantity = null,
    ): static {
        return new static([
            'request_id' => $request_id,
            'user_is_bot' => $user_is_bot,
            'user_is_premium' => $user_is_premium,
            'max_quantity' => $max_quantity,
        ]);
    }
}
