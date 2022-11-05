<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents a chat member that is under certain restrictions in the chat. Supergroups only.
 */
class ChatMemberRestricted extends ChatMember
{
    /** The member's status in the chat, always “restricted” */
    public string $status = 'restricted';

    /** True, if the user is a member of the chat at the moment of the request */
    public bool $is_member;

    /** True, if the user is allowed to change the chat title, photo and other settings */
    public bool $can_change_info;

    /** True, if the user is allowed to invite new users to the chat */
    public bool $can_invite_users;

    /** True, if the user is allowed to pin messages */
    public bool $can_pin_messages;

    /** True, if the user is allowed to create forum topics */
    public bool $can_manage_topics;

    /** True, if the user is allowed to send text messages, contacts, locations and venues */
    public bool $can_send_messages;

    /** True, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes */
    public bool $can_send_media_messages;

    /** True, if the user is allowed to send polls */
    public bool $can_send_polls;

    /** True, if the user is allowed to send animations, games, stickers and use inline bots */
    public bool $can_send_other_messages;

    /** True, if the user is allowed to add web page previews to their messages */
    public bool $can_add_web_page_previews;

    /** Date when restrictions will be lifted for this user; unix time. If 0, then the user is restricted forever */
    public int $until_date;

    /**
     * @param User $user Information about the user
     * @param bool $is_member True, if the user is a member of the chat at the moment of the request
     * @param bool $can_change_info True, if the user is allowed to change the chat title, photo and other settings
     * @param bool $can_invite_users True, if the user is allowed to invite new users to the chat
     * @param bool $can_pin_messages True, if the user is allowed to pin messages
     * @param bool $can_manage_topics True, if the user is allowed to create forum topics
     * @param bool $can_send_messages True, if the user is allowed to send text messages, contacts, locations and venues
     * @param bool $can_send_media_messages True, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes
     * @param bool $can_send_polls True, if the user is allowed to send polls
     * @param bool $can_send_other_messages True, if the user is allowed to send animations, games, stickers and use inline bots
     * @param bool $can_add_web_page_previews True, if the user is allowed to add web page previews to their messages
     * @param int $until_date Date when restrictions will be lifted for this user; unix time. If 0, then the user is restricted forever
     */
    public static function make(
        User $user,
        bool $is_member,
        bool $can_change_info,
        bool $can_invite_users,
        bool $can_pin_messages,
        bool $can_manage_topics,
        bool $can_send_messages,
        bool $can_send_media_messages,
        bool $can_send_polls,
        bool $can_send_other_messages,
        bool $can_add_web_page_previews,
        int $until_date,
    ): static {
        return new static([
            'user' => $user,
            'is_member' => $is_member,
            'can_change_info' => $can_change_info,
            'can_invite_users' => $can_invite_users,
            'can_pin_messages' => $can_pin_messages,
            'can_manage_topics' => $can_manage_topics,
            'can_send_messages' => $can_send_messages,
            'can_send_media_messages' => $can_send_media_messages,
            'can_send_polls' => $can_send_polls,
            'can_send_other_messages' => $can_send_other_messages,
            'can_add_web_page_previews' => $can_add_web_page_previews,
            'until_date' => $until_date,
        ]);
    }
}
