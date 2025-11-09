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

    /** <em>True</em>, if the user is a member of the chat at the moment of the request */
    public bool $is_member;

    /** <em>True</em>, if the user is allowed to send text messages, contacts, giveaways, giveaway winners, invoices, locations and venues */
    public bool $can_send_messages;

    /** <em>True</em>, if the user is allowed to send audios */
    public bool $can_send_audios;

    /** <em>True</em>, if the user is allowed to send documents */
    public bool $can_send_documents;

    /** <em>True</em>, if the user is allowed to send photos */
    public bool $can_send_photos;

    /** <em>True</em>, if the user is allowed to send videos */
    public bool $can_send_videos;

    /** <em>True</em>, if the user is allowed to send video notes */
    public bool $can_send_video_notes;

    /** <em>True</em>, if the user is allowed to send voice notes */
    public bool $can_send_voice_notes;

    /** <em>True</em>, if the user is allowed to send polls and checklists */
    public bool $can_send_polls;

    /** <em>True</em>, if the user is allowed to send animations, games, stickers and use inline bots */
    public bool $can_send_other_messages;

    /** <em>True</em>, if the user is allowed to add web page previews to their messages */
    public bool $can_add_web_page_previews;

    /** <em>True</em>, if the user is allowed to change the chat title, photo and other settings */
    public bool $can_change_info;

    /** <em>True</em>, if the user is allowed to invite new users to the chat */
    public bool $can_invite_users;

    /** <em>True</em>, if the user is allowed to pin messages */
    public bool $can_pin_messages;

    /** <em>True</em>, if the user is allowed to create forum topics */
    public bool $can_manage_topics;

    /** Date when restrictions will be lifted for this user; Unix time. If 0, then the user is restricted forever */
    public int $until_date;

    /**
     * @param  User  $user  Information about the user
     * @param  bool  $is_member  <em>True</em>, if the user is a member of the chat at the moment of the request
     * @param  bool  $can_send_messages  <em>True</em>, if the user is allowed to send text messages, contacts, giveaways, giveaway winners, invoices, locations and venues
     * @param  bool  $can_send_audios  <em>True</em>, if the user is allowed to send audios
     * @param  bool  $can_send_documents  <em>True</em>, if the user is allowed to send documents
     * @param  bool  $can_send_photos  <em>True</em>, if the user is allowed to send photos
     * @param  bool  $can_send_videos  <em>True</em>, if the user is allowed to send videos
     * @param  bool  $can_send_video_notes  <em>True</em>, if the user is allowed to send video notes
     * @param  bool  $can_send_voice_notes  <em>True</em>, if the user is allowed to send voice notes
     * @param  bool  $can_send_polls  <em>True</em>, if the user is allowed to send polls and checklists
     * @param  bool  $can_send_other_messages  <em>True</em>, if the user is allowed to send animations, games, stickers and use inline bots
     * @param  bool  $can_add_web_page_previews  <em>True</em>, if the user is allowed to add web page previews to their messages
     * @param  bool  $can_change_info  <em>True</em>, if the user is allowed to change the chat title, photo and other settings
     * @param  bool  $can_invite_users  <em>True</em>, if the user is allowed to invite new users to the chat
     * @param  bool  $can_pin_messages  <em>True</em>, if the user is allowed to pin messages
     * @param  bool  $can_manage_topics  <em>True</em>, if the user is allowed to create forum topics
     * @param  int  $until_date  Date when restrictions will be lifted for this user; Unix time. If 0, then the user is restricted forever
     */
    public static function make(
        User $user,
        bool $is_member,
        bool $can_send_messages,
        bool $can_send_audios,
        bool $can_send_documents,
        bool $can_send_photos,
        bool $can_send_videos,
        bool $can_send_video_notes,
        bool $can_send_voice_notes,
        bool $can_send_polls,
        bool $can_send_other_messages,
        bool $can_add_web_page_previews,
        bool $can_change_info,
        bool $can_invite_users,
        bool $can_pin_messages,
        bool $can_manage_topics,
        int $until_date,
    ): static {
        return new static([
            'user' => $user,
            'is_member' => $is_member,
            'can_send_messages' => $can_send_messages,
            'can_send_audios' => $can_send_audios,
            'can_send_documents' => $can_send_documents,
            'can_send_photos' => $can_send_photos,
            'can_send_videos' => $can_send_videos,
            'can_send_video_notes' => $can_send_video_notes,
            'can_send_voice_notes' => $can_send_voice_notes,
            'can_send_polls' => $can_send_polls,
            'can_send_other_messages' => $can_send_other_messages,
            'can_add_web_page_previews' => $can_add_web_page_previews,
            'can_change_info' => $can_change_info,
            'can_invite_users' => $can_invite_users,
            'can_pin_messages' => $can_pin_messages,
            'can_manage_topics' => $can_manage_topics,
            'until_date' => $until_date,
        ]);
    }
}
