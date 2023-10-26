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
    /** An HTTPS URL to be opened with user authorization data added to the query string when the button is pressed. If the user refuses to provide authorization data, the original URL without information about the user will be opened. The data added is the same as described in <a href="https://core.telegram.org/widgets/login#receiving-authorization-data">Receiving authorization data</a>.NOTE: You must always check the hash of the received data to verify the authentication and the integrity of the data as described in <a href="https://core.telegram.org/widgets/login#checking-authorization">Checking authorization</a>. */
    public string $url;

    /** <em>Optional</em>. New text of the button in forwarded messages. */
    public ?string $forward_text = null;

    /** <em>Optional</em>. Username of a bot, which will be used for user authorization. See <a href="https://core.telegram.org/widgets/login#setting-up-a-bot">Setting up a bot</a> for more details. If not specified, the current bot's username will be assumed. The <em>url</em>'s domain must be the same as the domain linked with the bot. See <a href="https://core.telegram.org/widgets/login#linking-your-domain-to-the-bot">Linking your domain to the bot</a> for more details. */
    public ?string $bot_username = null;

    /** <em>Optional</em>. Pass <em>True</em> to request the permission for your bot to send messages to the user. */
    public ?bool $request_write_access = null;

    /**
     * @param string $url An HTTPS URL to be opened with user authorization data added to the query string when the button is pressed. If the user refuses to provide authorization data, the original URL without information about the user will be opened. The data added is the same as described in <a href="https://core.telegram.org/widgets/login#receiving-authorization-data">Receiving authorization data</a>.NOTE: You must always check the hash of the received data to verify the authentication and the integrity of the data as described in <a href="https://core.telegram.org/widgets/login#checking-authorization">Checking authorization</a>.
     * @param string $forward_text <em>Optional</em>. New text of the button in forwarded messages.
     * @param string $bot_username <em>Optional</em>. Username of a bot, which will be used for user authorization. See <a href="https://core.telegram.org/widgets/login#setting-up-a-bot">Setting up a bot</a> for more details. If not specified, the current bot's username will be assumed. The <em>url</em>'s domain must be the same as the domain linked with the bot. See <a href="https://core.telegram.org/widgets/login#linking-your-domain-to-the-bot">Linking your domain to the bot</a> for more details.
     * @param bool $request_write_access <em>Optional</em>. Pass <em>True</em> to request the permission for your bot to send messages to the user.
     */
    public static function make(
        string $url,
        ?string $forward_text = null,
        ?string $bot_username = null,
        ?bool $request_write_access = null,
    ): static
    {
        return new static([
            'url' => $url,
            'forward_text' => $forward_text,
            'bot_username' => $bot_username,
            'request_write_access' => $request_write_access,
        ]);
    }
}
