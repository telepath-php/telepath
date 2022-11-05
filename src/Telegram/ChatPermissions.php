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
    /** Optional. True, if the user is allowed to send text messages, contacts, locations and venues */
    public ?bool $can_send_messages = null;

    /** Optional. True, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes, implies can_send_messages */
    public ?bool $can_send_media_messages = null;

    /** Optional. True, if the user is allowed to send polls, implies can_send_messages */
    public ?bool $can_send_polls = null;

    /** Optional. True, if the user is allowed to send animations, games, stickers and use inline bots, implies can_send_media_messages */
    public ?bool $can_send_other_messages = null;

    /** Optional. True, if the user is allowed to add web page previews to their messages, implies can_send_media_messages */
    public ?bool $can_add_web_page_previews = null;

    /** Optional. True, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups */
    public ?bool $can_change_info = null;

    /** Optional. True, if the user is allowed to invite new users to the chat */
    public ?bool $can_invite_users = null;

    /** Optional. True, if the user is allowed to pin messages. Ignored in public supergroups */
    public ?bool $can_pin_messages = null;

    /** Optional. True, if the user is allowed to create forum topics. If omitted defaults to the value of can_pin_messages */
    public ?bool $can_manage_topics = null;

    /**
     * @param bool $can_send_messages Optional. True, if the user is allowed to send text messages, contacts, locations and venues
     * @param bool $can_send_media_messages Optional. True, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes, implies can_send_messages
     * @param bool $can_send_polls Optional. True, if the user is allowed to send polls, implies can_send_messages
     * @param bool $can_send_other_messages Optional. True, if the user is allowed to send animations, games, stickers and use inline bots, implies can_send_media_messages
     * @param bool $can_add_web_page_previews Optional. True, if the user is allowed to add web page previews to their messages, implies can_send_media_messages
     * @param bool $can_change_info Optional. True, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups
     * @param bool $can_invite_users Optional. True, if the user is allowed to invite new users to the chat
     * @param bool $can_pin_messages Optional. True, if the user is allowed to pin messages. Ignored in public supergroups
     * @param bool $can_manage_topics Optional. True, if the user is allowed to create forum topics. If omitted defaults to the value of can_pin_messages
     */
    public static function make(
        ?bool $can_send_messages = null,
        ?bool $can_send_media_messages = null,
        ?bool $can_send_polls = null,
        ?bool $can_send_other_messages = null,
        ?bool $can_add_web_page_previews = null,
        ?bool $can_change_info = null,
        ?bool $can_invite_users = null,
        ?bool $can_pin_messages = null,
        ?bool $can_manage_topics = null,
    ): static {
        return new static([
            'can_send_messages' => $can_send_messages,
            'can_send_media_messages' => $can_send_media_messages,
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
