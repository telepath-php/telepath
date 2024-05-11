<?php

namespace Telepath\Types\Extensions;

use Telepath\Telegram\Chat;
use Telepath\Telegram\User;

/**
 * @internal
 */
trait UpdateExtension
{

    public function user(): ?User
    {
        foreach (get_object_vars($this) as $field) {
            // Search for 'from' field
            if (is_object($field) && ($field?->from ?? null) !== null) {
                return $field->from;
            }
        }

        return null;
    }

    public function chat(): ?Chat
    {
        foreach (get_object_vars($this) as $field) {
            // Search for 'chat' field
            if (is_object($field) && ($field?->chat ?? null) !== null) {
                return $field->chat;
            }
        }

        // Special case for CallbackQuery
        return $this->callback_query?->message?->chat
            ?? null;
    }

}