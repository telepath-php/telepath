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
            if (is_object($field) && $field?->from !== null) {
                return $field->from;
            }
        }

        return $this->poll_answer?->user
            ?? null;
    }

    public function chat(): ?Chat
    {
        foreach (get_object_vars($this) as $field) {
            if (is_object($field) && $field?->chat !== null) {
                return $field->chat;
            }
        }

        return $this->callback_query?->message?->chat
            ?? null;
    }

}