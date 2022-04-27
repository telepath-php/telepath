<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class ChatMemberBanned extends ChatMember
{
    public string $status;

    public User $user;

    public int $until_date;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}

