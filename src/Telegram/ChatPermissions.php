<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * Describes actions that a non-administrator user is allowed to take in a chat.
 */
class ChatPermissions extends Type
{
    /** <em>Optional</em>. <em>True</em>, if the user is allowed to send text messages, contacts, giveaways, giveaway winners, invoices, locations and venues */
    public ?bool $can_send_messages = null;

    /** <em>Optional</em>. <em>True</em>, if the user is allowed to send audios */
    public ?bool $can_send_audios = null;

    /** <em>Optional</em>. <em>True</em>, if the user is allowed to send documents */
    public ?bool $can_send_documents = null;

    /** <em>Optional</em>. <em>True</em>, if the user is allowed to send photos */
    public ?bool $can_send_photos = null;

    /** <em>Optional</em>. <em>True</em>, if the user is allowed to send videos */
    public ?bool $can_send_videos = null;

    /** <em>Optional</em>. <em>True</em>, if the user is allowed to send video notes */
    public ?bool $can_send_video_notes = null;

    /** <em>Optional</em>. <em>True</em>, if the user is allowed to send voice notes */
    public ?bool $can_send_voice_notes = null;

    /** <em>Optional</em>. <em>True</em>, if the user is allowed to send polls */
    public ?bool $can_send_polls = null;

    /** <em>Optional</em>. <em>True</em>, if the user is allowed to send animations, games, stickers and use inline bots */
    public ?bool $can_send_other_messages = null;

    /** <em>Optional</em>. <em>True</em>, if the user is allowed to add web page previews to their messages */
    public ?bool $can_add_web_page_previews = null;

    /** <em>Optional</em>. <em>True</em>, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups */
    public ?bool $can_change_info = null;

    /** <em>Optional</em>. <em>True</em>, if the user is allowed to invite new users to the chat */
    public ?bool $can_invite_users = null;

    /** <em>Optional</em>. <em>True</em>, if the user is allowed to pin messages. Ignored in public supergroups */
    public ?bool $can_pin_messages = null;

    /** <em>Optional</em>. <em>True</em>, if the user is allowed to create forum topics. If omitted defaults to the value of can_pin_messages */
    public ?bool $can_manage_topics = null;

    /**
     * @param  bool  $can_send_messages <em>Optional</em>. <em>True</em>, if the user is allowed to send text messages, contacts, giveaways, giveaway winners, invoices, locations and venues
     * @param  bool  $can_send_audios <em>Optional</em>. <em>True</em>, if the user is allowed to send audios
     * @param  bool  $can_send_documents <em>Optional</em>. <em>True</em>, if the user is allowed to send documents
     * @param  bool  $can_send_photos <em>Optional</em>. <em>True</em>, if the user is allowed to send photos
     * @param  bool  $can_send_videos <em>Optional</em>. <em>True</em>, if the user is allowed to send videos
     * @param  bool  $can_send_video_notes <em>Optional</em>. <em>True</em>, if the user is allowed to send video notes
     * @param  bool  $can_send_voice_notes <em>Optional</em>. <em>True</em>, if the user is allowed to send voice notes
     * @param  bool  $can_send_polls <em>Optional</em>. <em>True</em>, if the user is allowed to send polls
     * @param  bool  $can_send_other_messages <em>Optional</em>. <em>True</em>, if the user is allowed to send animations, games, stickers and use inline bots
     * @param  bool  $can_add_web_page_previews <em>Optional</em>. <em>True</em>, if the user is allowed to add web page previews to their messages
     * @param  bool  $can_change_info <em>Optional</em>. <em>True</em>, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups
     * @param  bool  $can_invite_users <em>Optional</em>. <em>True</em>, if the user is allowed to invite new users to the chat
     * @param  bool  $can_pin_messages <em>Optional</em>. <em>True</em>, if the user is allowed to pin messages. Ignored in public supergroups
     * @param  bool  $can_manage_topics <em>Optional</em>. <em>True</em>, if the user is allowed to create forum topics. If omitted defaults to the value of can_pin_messages
     */
    public static function make(
        bool $can_send_messages = null,
        bool $can_send_audios = null,
        bool $can_send_documents = null,
        bool $can_send_photos = null,
        bool $can_send_videos = null,
        bool $can_send_video_notes = null,
        bool $can_send_voice_notes = null,
        bool $can_send_polls = null,
        bool $can_send_other_messages = null,
        bool $can_add_web_page_previews = null,
        bool $can_change_info = null,
        bool $can_invite_users = null,
        bool $can_pin_messages = null,
        bool $can_manage_topics = null,
    ): static {
        return new static([
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
        ]);
    }
}
