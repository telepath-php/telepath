<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a chat.
 */
class Chat extends Type
{
    /** Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier. */
    public int $id;

    /** Type of chat, can be either “private”, “group”, “supergroup” or “channel” */
    public string $type;

    /** Optional. Title, for supergroups, channels and group chats */
    public ?string $title = null;

    /** Optional. Username, for private chats, supergroups and channels if available */
    public ?string $username = null;

    /** Optional. First name of the other party in a private chat */
    public ?string $first_name = null;

    /** Optional. Last name of the other party in a private chat */
    public ?string $last_name = null;

    /** Optional. True, if the supergroup chat is a forum (has topics enabled) */
    public ?bool $is_forum = null;

    /** Optional. Chat photo. Returned only in getChat. */
    public ?ChatPhoto $photo = null;

    /**
     * Optional. If non-empty, the list of all active chat usernames; for private chats, supergroups and channels. Returned only in getChat.
     * @var string[]
     */
    public ?array $active_usernames = null;

    /** Optional. Custom emoji identifier of emoji status of the other party in a private chat. Returned only in getChat. */
    public ?string $emoji_status_custom_emoji_id = null;

    /** Optional. Expiration date of the emoji status of the other party in a private chat, if any. Returned only in getChat. */
    public ?int $emoji_status_expiration_date = null;

    /** Optional. Bio of the other party in a private chat. Returned only in getChat. */
    public ?string $bio = null;

    /** Optional. True, if privacy settings of the other party in the private chat allows to use tg://user?id=<user_id> links only in chats with the user. Returned only in getChat. */
    public ?bool $has_private_forwards = null;

    /** Optional. True, if the privacy settings of the other party restrict sending voice and video note messages in the private chat. Returned only in getChat. */
    public ?bool $has_restricted_voice_and_video_messages = null;

    /** Optional. True, if users need to join the supergroup before they can send messages. Returned only in getChat. */
    public ?bool $join_to_send_messages = null;

    /** Optional. True, if all users directly joining the supergroup need to be approved by supergroup administrators. Returned only in getChat. */
    public ?bool $join_by_request = null;

    /** Optional. Description, for groups, supergroups and channel chats. Returned only in getChat. */
    public ?string $description = null;

    /** Optional. Primary invite link, for groups, supergroups and channel chats. Returned only in getChat. */
    public ?string $invite_link = null;

    /** Optional. The most recent pinned message (by sending date). Returned only in getChat. */
    public ?Message $pinned_message = null;

    /** Optional. Default chat member permissions, for groups and supergroups. Returned only in getChat. */
    public ?ChatPermissions $permissions = null;

    /** Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each unpriviledged user; in seconds. Returned only in getChat. */
    public ?int $slow_mode_delay = null;

    /** Optional. The time after which all messages sent to the chat will be automatically deleted; in seconds. Returned only in getChat. */
    public ?int $message_auto_delete_time = null;

    /** Optional. True, if aggressive anti-spam checks are enabled in the supergroup. The field is only available to chat administrators. Returned only in getChat. */
    public ?bool $has_aggressive_anti_spam_enabled = null;

    /** Optional. True, if non-administrators can only get the list of bots and administrators in the chat. Returned only in getChat. */
    public ?bool $has_hidden_members = null;

    /** Optional. True, if messages from the chat can't be forwarded to other chats. Returned only in getChat. */
    public ?bool $has_protected_content = null;

    /** Optional. For supergroups, name of group sticker set. Returned only in getChat. */
    public ?string $sticker_set_name = null;

    /** Optional. True, if the bot can change the group sticker set. Returned only in getChat. */
    public ?bool $can_set_sticker_set = null;

    /** Optional. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier. Returned only in getChat. */
    public ?int $linked_chat_id = null;

    /** Optional. For supergroups, the location to which the supergroup is connected. Returned only in getChat. */
    public ?ChatLocation $location = null;

    /**
     * @param int $id Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param string $type Type of chat, can be either “private”, “group”, “supergroup” or “channel”
     * @param string $title Optional. Title, for supergroups, channels and group chats
     * @param string $username Optional. Username, for private chats, supergroups and channels if available
     * @param string $first_name Optional. First name of the other party in a private chat
     * @param string $last_name Optional. Last name of the other party in a private chat
     * @param bool $is_forum Optional. True, if the supergroup chat is a forum (has topics enabled)
     * @param ChatPhoto $photo Optional. Chat photo. Returned only in getChat.
     * @param string[] $active_usernames Optional. If non-empty, the list of all active chat usernames; for private chats, supergroups and channels. Returned only in getChat.
     * @param string $emoji_status_custom_emoji_id Optional. Custom emoji identifier of emoji status of the other party in a private chat. Returned only in getChat.
     * @param int $emoji_status_expiration_date Optional. Expiration date of the emoji status of the other party in a private chat, if any. Returned only in getChat.
     * @param string $bio Optional. Bio of the other party in a private chat. Returned only in getChat.
     * @param bool $has_private_forwards Optional. True, if privacy settings of the other party in the private chat allows to use tg://user?id=<user_id> links only in chats with the user. Returned only in getChat.
     * @param bool $has_restricted_voice_and_video_messages Optional. True, if the privacy settings of the other party restrict sending voice and video note messages in the private chat. Returned only in getChat.
     * @param bool $join_to_send_messages Optional. True, if users need to join the supergroup before they can send messages. Returned only in getChat.
     * @param bool $join_by_request Optional. True, if all users directly joining the supergroup need to be approved by supergroup administrators. Returned only in getChat.
     * @param string $description Optional. Description, for groups, supergroups and channel chats. Returned only in getChat.
     * @param string $invite_link Optional. Primary invite link, for groups, supergroups and channel chats. Returned only in getChat.
     * @param Message $pinned_message Optional. The most recent pinned message (by sending date). Returned only in getChat.
     * @param ChatPermissions $permissions Optional. Default chat member permissions, for groups and supergroups. Returned only in getChat.
     * @param int $slow_mode_delay Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each unpriviledged user; in seconds. Returned only in getChat.
     * @param int $message_auto_delete_time Optional. The time after which all messages sent to the chat will be automatically deleted; in seconds. Returned only in getChat.
     * @param bool $has_aggressive_anti_spam_enabled Optional. True, if aggressive anti-spam checks are enabled in the supergroup. The field is only available to chat administrators. Returned only in getChat.
     * @param bool $has_hidden_members Optional. True, if non-administrators can only get the list of bots and administrators in the chat. Returned only in getChat.
     * @param bool $has_protected_content Optional. True, if messages from the chat can't be forwarded to other chats. Returned only in getChat.
     * @param string $sticker_set_name Optional. For supergroups, name of group sticker set. Returned only in getChat.
     * @param bool $can_set_sticker_set Optional. True, if the bot can change the group sticker set. Returned only in getChat.
     * @param int $linked_chat_id Optional. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier. Returned only in getChat.
     * @param ChatLocation $location Optional. For supergroups, the location to which the supergroup is connected. Returned only in getChat.
     */
    public static function make(
        int $id,
        string $type,
        ?string $title = null,
        ?string $username = null,
        ?string $first_name = null,
        ?string $last_name = null,
        ?bool $is_forum = null,
        ?ChatPhoto $photo = null,
        ?array $active_usernames = null,
        ?string $emoji_status_custom_emoji_id = null,
        ?int $emoji_status_expiration_date = null,
        ?string $bio = null,
        ?bool $has_private_forwards = null,
        ?bool $has_restricted_voice_and_video_messages = null,
        ?bool $join_to_send_messages = null,
        ?bool $join_by_request = null,
        ?string $description = null,
        ?string $invite_link = null,
        ?Message $pinned_message = null,
        ?ChatPermissions $permissions = null,
        ?int $slow_mode_delay = null,
        ?int $message_auto_delete_time = null,
        ?bool $has_aggressive_anti_spam_enabled = null,
        ?bool $has_hidden_members = null,
        ?bool $has_protected_content = null,
        ?string $sticker_set_name = null,
        ?bool $can_set_sticker_set = null,
        ?int $linked_chat_id = null,
        ?ChatLocation $location = null,
    ): static {
        return new static([
            'id' => $id,
            'type' => $type,
            'title' => $title,
            'username' => $username,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'is_forum' => $is_forum,
            'photo' => $photo,
            'active_usernames' => $active_usernames,
            'emoji_status_custom_emoji_id' => $emoji_status_custom_emoji_id,
            'emoji_status_expiration_date' => $emoji_status_expiration_date,
            'bio' => $bio,
            'has_private_forwards' => $has_private_forwards,
            'has_restricted_voice_and_video_messages' => $has_restricted_voice_and_video_messages,
            'join_to_send_messages' => $join_to_send_messages,
            'join_by_request' => $join_by_request,
            'description' => $description,
            'invite_link' => $invite_link,
            'pinned_message' => $pinned_message,
            'permissions' => $permissions,
            'slow_mode_delay' => $slow_mode_delay,
            'message_auto_delete_time' => $message_auto_delete_time,
            'has_aggressive_anti_spam_enabled' => $has_aggressive_anti_spam_enabled,
            'has_hidden_members' => $has_hidden_members,
            'has_protected_content' => $has_protected_content,
            'sticker_set_name' => $sticker_set_name,
            'can_set_sticker_set' => $can_set_sticker_set,
            'linked_chat_id' => $linked_chat_id,
            'location' => $location,
        ]);
    }
}
