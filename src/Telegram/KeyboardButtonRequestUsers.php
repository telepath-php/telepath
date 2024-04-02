<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object defines the criteria used to request suitable users. Information about the selected users will be shared with the bot when the corresponding button is pressed. More about requesting users »
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

    /** <em>Optional</em>. Pass <em>True</em> to request the users' first and last name */
    public ?bool $request_name = null;

    /** <em>Optional</em>. Pass <em>True</em> to request the users' username */
    public ?bool $request_username = null;

    /** <em>Optional</em>. Pass <em>True</em> to request the users' photo */
    public ?bool $request_photo = null;

    /**
     * @param  int  $request_id  Signed 32-bit identifier of the request that will be received back in the <a href="https://core.telegram.org/bots/api#usersshared">UsersShared</a> object. Must be unique within the message
     * @param  bool  $user_is_bot  <em>Optional</em>. Pass <em>True</em> to request bots, pass <em>False</em> to request regular users. If not specified, no additional restrictions are applied.
     * @param  bool  $user_is_premium  <em>Optional</em>. Pass <em>True</em> to request premium users, pass <em>False</em> to request non-premium users. If not specified, no additional restrictions are applied.
     * @param  int  $max_quantity  <em>Optional</em>. The maximum number of users to be selected; 1-10. Defaults to 1.
     * @param  bool  $request_name  <em>Optional</em>. Pass <em>True</em> to request the users' first and last name
     * @param  bool  $request_username  <em>Optional</em>. Pass <em>True</em> to request the users' username
     * @param  bool  $request_photo  <em>Optional</em>. Pass <em>True</em> to request the users' photo
     */
    public static function make(
        int $request_id,
        ?bool $user_is_bot = null,
        ?bool $user_is_premium = null,
        ?int $max_quantity = null,
        ?bool $request_name = null,
        ?bool $request_username = null,
        ?bool $request_photo = null,
    ): static {
        return new static([
            'request_id' => $request_id,
            'user_is_bot' => $user_is_bot,
            'user_is_premium' => $user_is_premium,
            'max_quantity' => $max_quantity,
            'request_name' => $request_name,
            'request_username' => $request_username,
            'request_photo' => $request_photo,
        ]);
    }
}
