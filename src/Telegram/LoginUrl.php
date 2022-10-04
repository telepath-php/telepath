<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a parameter of the inline keyboard button used to automatically authorize a user. Serves as a great replacement for the Telegram Login Widget when the user is coming from Telegram. All the user needs to do is tap/click a button and confirm that they want to log in:
 */
class LoginUrl extends Type
{
    /** An HTTPS URL to be opened with user authorization data added to the query string when the button is pressed. If the user refuses to provide authorization data, the original URL without information about the user will be opened. The data added is the same as described in Receiving authorization data.NOTE: You must always check the hash of the received data to verify the authentication and the integrity of the data as described in Checking authorization. */
    public string $url;

    /** Optional. New text of the button in forwarded messages. */
    public ?string $forward_text = null;

    /** Optional. Username of a bot, which will be used for user authorization. See Setting up a bot for more details. If not specified, the current bot's username will be assumed. The url's domain must be the same as the domain linked with the bot. See Linking your domain to the bot for more details. */
    public ?string $bot_username = null;

    /** Optional. Pass True to request the permission for your bot to send messages to the user. */
    public ?bool $request_write_access = null;

    /**
     * @param string $url An HTTPS URL to be opened with user authorization data added to the query string when the button is pressed. If the user refuses to provide authorization data, the original URL without information about the user will be opened. The data added is the same as described in Receiving authorization data.NOTE: You must always check the hash of the received data to verify the authentication and the integrity of the data as described in Checking authorization.
     * @param string $forward_text Optional. New text of the button in forwarded messages.
     * @param string $bot_username Optional. Username of a bot, which will be used for user authorization. See Setting up a bot for more details. If not specified, the current bot's username will be assumed. The url's domain must be the same as the domain linked with the bot. See Linking your domain to the bot for more details.
     * @param bool $request_write_access Optional. Pass True to request the permission for your bot to send messages to the user.
     */
    public static function make(
        string $url,
        ?string $forward_text = null,
        ?string $bot_username = null,
        ?bool $request_write_access = null,
    ): static {
        return new static([
            'url' => $url,
            'forward_text' => $forward_text,
            'bot_username' => $bot_username,
            'request_write_access' => $request_write_access,
        ]);
    }
}
