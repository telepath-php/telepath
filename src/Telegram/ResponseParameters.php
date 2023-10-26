<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes why a request was unsuccessful.
 */
class ResponseParameters extends Type
{
    /** <em>Optional</em>. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier. */
    public ?int $migrate_to_chat_id = null;

    /** <em>Optional</em>. In case of exceeding flood control, the number of seconds left to wait before the request can be repeated */
    public ?int $retry_after = null;

    /**
     * @param int $migrate_to_chat_id <em>Optional</em>. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param int $retry_after <em>Optional</em>. In case of exceeding flood control, the number of seconds left to wait before the request can be repeated
     */
    public static function make(?int $migrate_to_chat_id = null, ?int $retry_after = null): static
    {
        return new static([
            'migrate_to_chat_id' => $migrate_to_chat_id,
            'retry_after' => $retry_after,
        ]);
    }
}
