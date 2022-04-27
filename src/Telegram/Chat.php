<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class Chat extends \Tii\Telepath\Type
{
    public readonly int $id;

    public readonly string $type;

    public readonly string $title;

    public readonly string $username;

    public readonly string $first_name;

    public readonly string $last_name;

    public readonly ChatPhoto $photo;

    public readonly string $bio;

    public readonly bool $has_private_forwards;

    public readonly string $description;

    public readonly string $invite_link;

    public readonly Message $pinned_message;

    public readonly ChatPermissions $permissions;

    public readonly int $slow_mode_delay;

    public readonly int $message_auto_delete_time;

    public readonly bool $has_protected_content;

    public readonly string $sticker_set_name;

    public readonly bool $can_set_sticker_set;

    public readonly int $linked_chat_id;

    public readonly ChatLocation $location;
}

