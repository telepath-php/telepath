<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class ChatMemberAdministrator extends ChatMember
{
    public string $status;

    public User $user;

    public bool $can_be_edited;

    public bool $is_anonymous;

    public bool $can_manage_chat;

    public bool $can_delete_messages;

    public bool $can_manage_video_chats;

    public bool $can_restrict_members;

    public bool $can_promote_members;

    public bool $can_change_info;

    public bool $can_invite_users;

    public bool $can_post_messages;

    public bool $can_edit_messages;

    public bool $can_pin_messages;

    public string $custom_title;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}

