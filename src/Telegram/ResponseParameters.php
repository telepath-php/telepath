<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Contains information about why a request was unsuccessful.
 */
class ResponseParameters extends \Tii\Telepath\Types\Type
{
    /** Optional. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier. */
    public ?int $migrate_to_chat_id = null;

    /** Optional. In case of exceeding flood control, the number of seconds left to wait before the request can be repeated */
    public ?int $retry_after = null;

    /**
     * @param int $migrate_to_chat_id Optional. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param int $retry_after Optional. In case of exceeding flood control, the number of seconds left to wait before the request can be repeated
     */
    public static function make(?int $migrate_to_chat_id = null, ?int $retry_after = null): static
    {
        return new static([
            'migrate_to_chat_id' => $migrate_to_chat_id,
            'retry_after' => $retry_after,
        ]);
    }
}
