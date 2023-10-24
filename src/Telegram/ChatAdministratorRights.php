<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Represents the rights of an administrator in a chat.
 */
class ChatAdministratorRights extends Type
{
    /** <em>True</em>, if the user's presence in the chat is hidden */
    public bool $is_anonymous;

    /** <em>True</em>, if the administrator can access the chat event log, boost list in channels, see channel members, report spam messages, see anonymous administrators in supergroups and ignore slow mode. Implied by any other administrator privilege */
    public bool $can_manage_chat;

    /** <em>True</em>, if the administrator can delete messages of other users */
    public bool $can_delete_messages;

    /** <em>True</em>, if the administrator can manage video chats */
    public bool $can_manage_video_chats;

    /** <em>True</em>, if the administrator can restrict, ban or unban chat members, or access supergroup statistics */
    public bool $can_restrict_members;

    /** <em>True</em>, if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by the user) */
    public bool $can_promote_members;

    /** <em>True</em>, if the user is allowed to change the chat title, photo and other settings */
    public bool $can_change_info;

    /** <em>True</em>, if the user is allowed to invite new users to the chat */
    public bool $can_invite_users;

    /** <em>Optional</em>. <em>True</em>, if the administrator can post messages in the channel, or access channel statistics; channels only */
    public ?bool $can_post_messages = null;

    /** <em>Optional</em>. <em>True</em>, if the administrator can edit messages of other users and can pin messages; channels only */
    public ?bool $can_edit_messages = null;

    /** <em>Optional</em>. <em>True</em>, if the user is allowed to pin messages; groups and supergroups only */
    public ?bool $can_pin_messages = null;

    /** <em>Optional</em>. <em>True</em>, if the administrator can post stories in the channel; channels only */
    public ?bool $can_post_stories = null;

    /** <em>Optional</em>. <em>True</em>, if the administrator can edit stories posted by other users; channels only */
    public ?bool $can_edit_stories = null;

    /** <em>Optional</em>. <em>True</em>, if the administrator can delete stories posted by other users; channels only */
    public ?bool $can_delete_stories = null;

    /** <em>Optional</em>. <em>True</em>, if the user is allowed to create, rename, close, and reopen forum topics; supergroups only */
    public ?bool $can_manage_topics = null;

    /**
     * @param  bool  $is_anonymous <em>True</em>, if the user's presence in the chat is hidden
     * @param  bool  $can_manage_chat <em>True</em>, if the administrator can access the chat event log, boost list in channels, see channel members, report spam messages, see anonymous administrators in supergroups and ignore slow mode. Implied by any other administrator privilege
     * @param  bool  $can_delete_messages <em>True</em>, if the administrator can delete messages of other users
     * @param  bool  $can_manage_video_chats <em>True</em>, if the administrator can manage video chats
     * @param  bool  $can_restrict_members <em>True</em>, if the administrator can restrict, ban or unban chat members, or access supergroup statistics
     * @param  bool  $can_promote_members <em>True</em>, if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by the user)
     * @param  bool  $can_change_info <em>True</em>, if the user is allowed to change the chat title, photo and other settings
     * @param  bool  $can_invite_users <em>True</em>, if the user is allowed to invite new users to the chat
     * @param  bool  $can_post_messages <em>Optional</em>. <em>True</em>, if the administrator can post messages in the channel, or access channel statistics; channels only
     * @param  bool  $can_edit_messages <em>Optional</em>. <em>True</em>, if the administrator can edit messages of other users and can pin messages; channels only
     * @param  bool  $can_pin_messages <em>Optional</em>. <em>True</em>, if the user is allowed to pin messages; groups and supergroups only
     * @param  bool  $can_post_stories <em>Optional</em>. <em>True</em>, if the administrator can post stories in the channel; channels only
     * @param  bool  $can_edit_stories <em>Optional</em>. <em>True</em>, if the administrator can edit stories posted by other users; channels only
     * @param  bool  $can_delete_stories <em>Optional</em>. <em>True</em>, if the administrator can delete stories posted by other users; channels only
     * @param  bool  $can_manage_topics <em>Optional</em>. <em>True</em>, if the user is allowed to create, rename, close, and reopen forum topics; supergroups only
     */
    public static function make(
        bool $is_anonymous,
        bool $can_manage_chat,
        bool $can_delete_messages,
        bool $can_manage_video_chats,
        bool $can_restrict_members,
        bool $can_promote_members,
        bool $can_change_info,
        bool $can_invite_users,
        bool $can_post_messages = null,
        bool $can_edit_messages = null,
        bool $can_pin_messages = null,
        bool $can_post_stories = null,
        bool $can_edit_stories = null,
        bool $can_delete_stories = null,
        bool $can_manage_topics = null,
    ): static {
        return new static([
            'is_anonymous' => $is_anonymous,
            'can_manage_chat' => $can_manage_chat,
            'can_delete_messages' => $can_delete_messages,
            'can_manage_video_chats' => $can_manage_video_chats,
            'can_restrict_members' => $can_restrict_members,
            'can_promote_members' => $can_promote_members,
            'can_change_info' => $can_change_info,
            'can_invite_users' => $can_invite_users,
            'can_post_messages' => $can_post_messages,
            'can_edit_messages' => $can_edit_messages,
            'can_pin_messages' => $can_pin_messages,
            'can_post_stories' => $can_post_stories,
            'can_edit_stories' => $can_edit_stories,
            'can_delete_stories' => $can_delete_stories,
            'can_manage_topics' => $can_manage_topics,
        ]);
    }
}
