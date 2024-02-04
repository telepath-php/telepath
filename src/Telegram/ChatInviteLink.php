<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Represents an invite link for a chat.
 */
class ChatInviteLink extends Type
{
    /** The invite link. If the link was created by another chat administrator, then the second part of the link will be replaced with “…”. */
    public string $invite_link;

    /** Creator of the link */
    public User $creator;

    /** <em>True</em>, if users joining the chat via the link need to be approved by chat administrators */
    public bool $creates_join_request;

    /** <em>True</em>, if the link is primary */
    public bool $is_primary;

    /** <em>True</em>, if the link is revoked */
    public bool $is_revoked;

    /** <em>Optional</em>. Invite link name */
    public ?string $name = null;

    /** <em>Optional</em>. Point in time (Unix timestamp) when the link will expire or has been expired */
    public ?int $expire_date = null;

    /** <em>Optional</em>. The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999 */
    public ?int $member_limit = null;

    /** <em>Optional</em>. Number of pending join requests created using this link */
    public ?int $pending_join_request_count = null;

    /**
     * @param  string  $invite_link  The invite link. If the link was created by another chat administrator, then the second part of the link will be replaced with “…”.
     * @param  User  $creator  Creator of the link
     * @param  bool  $creates_join_request  <em>True</em>, if users joining the chat via the link need to be approved by chat administrators
     * @param  bool  $is_primary  <em>True</em>, if the link is primary
     * @param  bool  $is_revoked  <em>True</em>, if the link is revoked
     * @param  string  $name  <em>Optional</em>. Invite link name
     * @param  int  $expire_date  <em>Optional</em>. Point in time (Unix timestamp) when the link will expire or has been expired
     * @param  int  $member_limit  <em>Optional</em>. The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
     * @param  int  $pending_join_request_count  <em>Optional</em>. Number of pending join requests created using this link
     */
    public static function make(
        string $invite_link,
        User $creator,
        bool $creates_join_request,
        bool $is_primary,
        bool $is_revoked,
        ?string $name = null,
        ?int $expire_date = null,
        ?int $member_limit = null,
        ?int $pending_join_request_count = null,
    ): static {
        return new static([
            'invite_link' => $invite_link,
            'creator' => $creator,
            'creates_join_request' => $creates_join_request,
            'is_primary' => $is_primary,
            'is_revoked' => $is_revoked,
            'name' => $name,
            'expire_date' => $expire_date,
            'member_limit' => $member_limit,
            'pending_join_request_count' => $pending_join_request_count,
        ]);
    }
}
