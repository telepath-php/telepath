<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object defines the parameters for the creation of a managed bot. Information about the created bot will be shared with the bot using the update <em>managed_bot</em> and a Message with the field <em>managed_bot_created</em>.
 */
class KeyboardButtonRequestManagedBot extends Type
{
    /** Signed 32-bit identifier of the request. Must be unique within the message */
    public int $request_id;

    /** <em>Optional</em>. Suggested name for the bot */
    public ?string $suggested_name = null;

    /** <em>Optional</em>. Suggested username for the bot */
    public ?string $suggested_username = null;

    /**
     * @param  int  $request_id  Signed 32-bit identifier of the request. Must be unique within the message
     * @param  string  $suggested_name  <em>Optional</em>. Suggested name for the bot
     * @param  string  $suggested_username  <em>Optional</em>. Suggested username for the bot
     */
    public static function make(
        int $request_id,
        ?string $suggested_name = null,
        ?string $suggested_username = null,
    ): static {
        return new static([
            'request_id' => $request_id,
            'suggested_name' => $suggested_name,
            'suggested_username' => $suggested_username,
        ]);
    }
}
