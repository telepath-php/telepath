<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class ChatInviteLink extends \Tii\Telepath\Type
{
    public readonly string $invite_link;

    public readonly User $creator;

    public readonly bool $creates_join_request;

    public readonly bool $is_primary;

    public readonly bool $is_revoked;

    public readonly string $name;

    public readonly int $expire_date;

    public readonly int $member_limit;

    public readonly int $pending_join_request_count;
}

