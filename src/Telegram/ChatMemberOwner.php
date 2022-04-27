<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class ChatMemberOwner extends ChatMember
{
    public string $status;

    public User $user;

    public bool $is_anonymous;

    public string $custom_title;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}

