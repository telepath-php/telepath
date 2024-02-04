<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a service message about a user allowing a bot to write messages after adding it to the attachment menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method requestWriteAccess.
 */
class WriteAccessAllowed extends Type
{
    /** <em>Optional</em>. True, if the access was granted after the user accepted an explicit request from a Web App sent by the method <a href="https://core.telegram.org/bots/webapps#initializing-mini-apps">requestWriteAccess</a> */
    public ?bool $from_request = null;

    /** <em>Optional</em>. Name of the Web App, if the access was granted when the Web App was launched from a link */
    public ?string $web_app_name = null;

    /** <em>Optional</em>. True, if the access was granted when the bot was added to the attachment or side menu */
    public ?bool $from_attachment_menu = null;

    /**
     * @param  bool  $from_request  <em>Optional</em>. True, if the access was granted after the user accepted an explicit request from a Web App sent by the method <a href="https://core.telegram.org/bots/webapps#initializing-mini-apps">requestWriteAccess</a>
     * @param  string  $web_app_name  <em>Optional</em>. Name of the Web App, if the access was granted when the Web App was launched from a link
     * @param  bool  $from_attachment_menu  <em>Optional</em>. True, if the access was granted when the bot was added to the attachment or side menu
     */
    public static function make(
        ?bool $from_request = null,
        ?string $web_app_name = null,
        ?bool $from_attachment_menu = null,
    ): static {
        return new static([
            'from_request' => $from_request,
            'web_app_name' => $web_app_name,
            'from_attachment_menu' => $from_attachment_menu,
        ]);
    }
}
