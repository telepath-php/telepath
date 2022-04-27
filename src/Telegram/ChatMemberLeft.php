<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class ChatMemberLeft extends ChatMember
{
    public string $status;

    public User $user;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}

