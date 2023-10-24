<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents a chat member that owns the chat and has all administrator privileges.
 */
class ChatMemberOwner extends ChatMember
{
    /** The member's status in the chat, always “creator” */
    public string $status = 'creator';

    /** <em>True</em>, if the user's presence in the chat is hidden */
    public bool $is_anonymous;

    /** <em>Optional</em>. Custom title for this user */
    public ?string $custom_title = null;

    /**
     * @param  User  $user Information about the user
     * @param  bool  $is_anonymous <em>True</em>, if the user's presence in the chat is hidden
     * @param  string  $custom_title <em>Optional</em>. Custom title for this user
     */
    public static function make(User $user, bool $is_anonymous, string $custom_title = null): static
    {
        return new static([
            'user' => $user,
            'is_anonymous' => $is_anonymous,
            'custom_title' => $custom_title,
        ]);
    }
}
