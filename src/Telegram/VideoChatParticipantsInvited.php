<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a service message about new members invited to a video chat.
 */
class VideoChatParticipantsInvited extends Type
{
    /**
     * New members that were invited to the video chat
     *
     * @var User[]
     */
    public array $users;

    /**
     * @param  User[]  $users  New members that were invited to the video chat
     */
    public static function make(array $users): static
    {
        return new static([
            'users' => $users,
        ]);
    }
}
