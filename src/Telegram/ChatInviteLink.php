<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class ChatInviteLink extends \Tii\Telepath\Type
{
    public string $invite_link;

    public User $creator;

    public bool $creates_join_request;

    public bool $is_primary;

    public bool $is_revoked;

    public string $name;

    public int $expire_date;

    public int $member_limit;

    public int $pending_join_request_count;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}

