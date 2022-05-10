<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object contains information about one member of a chat. Currently, the following 6 types of chat members are supported:
 */
abstract class ChatMember extends \Tii\Telepath\Types\Type
{
    /** The member's status in the chat */
    public string $status;

    /** Information about the user */
    public User $user;

    public static function factory(array $data): static
    {
        return match($data['status']) {
            'creator' => new ChatMemberOwner($data)
            'administrator' => new ChatMemberAdministrator($data)
            'member' => new ChatMemberMember($data)
            'restricted' => new ChatMemberRestricted($data)
            'left' => new ChatMemberLeft($data)
            'kicked' => new ChatMemberBanned($data)
        };
    }
}
