<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a service message about a user allowing a bot to write messages after adding the bot to the attachment menu or launching a Web App from a link.
 */
class WriteAccessAllowed extends Type
{
    /** Optional. Name of the Web App which was launched from a link */
    public ?string $web_app_name = null;

    /**
     * @param string $web_app_name Optional. Name of the Web App which was launched from a link
     */
    public static function make(?string $web_app_name = null): static
    {
        return new static([
            'web_app_name' => $web_app_name,
        ]);
    }
}
