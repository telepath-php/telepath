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

    /** <em>Optional</em>. Title, for supergroups, channels and group chats */
    public ?string $title = null;

    /** <em>Optional</em>. Username, for private chats, supergroups and channels if available */
    public ?string $username = null;

    /** <em>Optional</em>. First name of the other party in a private chat */
    public ?string $first_name = null;

    /** <em>Optional</em>. Last name of the other party in a private chat */
    public ?string $last_name = null;

    /** <em>Optional</em>. <em>True</em>, if the supergroup chat is a forum (has <a href="https://telegram.org/blog/topics-in-groups-collectible-usernames#topics-in-groups">topics</a> enabled) */
    public ?bool $is_forum = null;

    /** <em>Optional</em>. Chat photo. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>. */
    public ?ChatPhoto $photo = null;

    /**
     * <em>Optional</em>. If non-empty, the list of all <a href="https://telegram.org/blog/topics-in-groups-collectible-usernames#collectible-usernames">active chat usernames</a>; for private chats, supergroups and channels. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>.
     *
     * @var string[]
     */
    public ?array $active_usernames = null;

    /**
     * <em>Optional</em>. List of available reactions allowed in the chat. If omitted, then all <a href="https://core.telegram.org/bots/api#reactiontypeemoji">emoji reactions</a> are allowed. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>.
     *
     * @var ReactionType[]
     */
    public ?array $available_reactions = null;

    /** <em>Optional</em>. Identifier of the accent color for the chat name and backgrounds of the chat photo, reply header, and link preview. See <a href="https://core.telegram.org/bots/api#accent-colors">accent colors</a> for more details. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>. Always returned in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>. */
    public ?int $accent_color_id = null;

    /** <em>Optional</em>. Custom emoji identifier of emoji chosen by the chat for the reply header and link preview background. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>. */
    public ?string $background_custom_emoji_id = null;

    /** <em>Optional</em>. Identifier of the accent color for the chat's profile background. See <a href="https://core.telegram.org/bots/api#profile-accent-colors">profile accent colors</a> for more details. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>. */
    public ?int $profile_accent_color_id = null;

    /** <em>Optional</em>. Custom emoji identifier of the emoji chosen by the chat for its profile background. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>. */
    public ?string $profile_background_custom_emoji_id = null;

    /** <em>Optional</em>. Custom emoji identifier of the emoji status of the chat or the other party in a private chat. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>. */
    public ?string $emoji_status_custom_emoji_id = null;

    /** <em>Optional</em>. Expiration date of the emoji status of the chat or the other party in a private chat, in Unix time, if any. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>. */
    public ?int $emoji_status_expiration_date = null;

    /** <em>Optional</em>. Bio of the other party in a private chat. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>. */
    public ?string $bio = null;

    /** <em>Optional</em>. <em>True</em>, if privacy settings of the other party in the private chat allows to use tg://user?id=<user_id> links only in chats with the user. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>. */
    public ?bool $has_private_forwards = null;

    /** <em>Optional</em>. <em>True</em>, if the privacy settings of the other party restrict sending voice and video note messages in the private chat. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>. */
    public ?bool $has_restricted_voice_and_video_messages = null;

    /** <em>Optional</em>. <em>True</em>, if users need to join the supergroup before they can send messages. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>. */
    public ?bool $join_to_send_messages = null;

    /** <em>Optional</em>. <em>True</em>, if all users directly joining the supergroup need to be approved by supergroup administrators. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>. */
    public ?bool $join_by_request = null;

    /** <em>Optional</em>. Description, for groups, supergroups and channel chats. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>. */
    public ?string $description = null;

    /** <em>Optional</em>. Primary invite link, for groups, supergroups and channel chats. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>. */
    public ?string $invite_link = null;

    /** <em>Optional</em>. The most recent pinned message (by sending date). Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>. */
    public ?Message $pinned_message = null;

    /** <em>Optional</em>. Default chat member permissions, for groups and supergroups. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>. */
    public ?ChatPermissions $permissions = null;

    /** <em>Optional</em>. For supergroups, the minimum allowed delay between consecutive messages sent by each unpriviledged user; in seconds. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>. */
    public ?int $slow_mode_delay = null;

    /** <em>Optional</em>. The time after which all messages sent to the chat will be automatically deleted; in seconds. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>. */
    public ?int $message_auto_delete_time = null;

    /** <em>Optional</em>. <em>True</em>, if aggressive anti-spam checks are enabled in the supergroup. The field is only available to chat administrators. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>. */
    public ?bool $has_aggressive_anti_spam_enabled = null;

    /** <em>Optional</em>. <em>True</em>, if non-administrators can only get the list of bots and administrators in the chat. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>. */
    public ?bool $has_hidden_members = null;

    /** <em>Optional</em>. <em>True</em>, if messages from the chat can't be forwarded to other chats. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>. */
    public ?bool $has_protected_content = null;

    /** <em>Optional</em>. <em>True</em>, if new chat members will have access to old messages; available only to chat administrators. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>. */
    public ?bool $has_visible_history = null;

    /** <em>Optional</em>. For supergroups, name of group sticker set. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>. */
    public ?string $sticker_set_name = null;

    /** <em>Optional</em>. <em>True</em>, if the bot can change the group sticker set. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>. */
    public ?bool $can_set_sticker_set = null;

    /** <em>Optional</em>. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>. */
    public ?int $linked_chat_id = null;

    /** <em>Optional</em>. For supergroups, the location to which the supergroup is connected. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>. */
    public ?ChatLocation $location = null;

    /**
     * @param  int  $id  Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param  string  $type  Type of chat, can be either “private”, “group”, “supergroup” or “channel”
     * @param  string  $title  <em>Optional</em>. Title, for supergroups, channels and group chats
     * @param  string  $username  <em>Optional</em>. Username, for private chats, supergroups and channels if available
     * @param  string  $first_name  <em>Optional</em>. First name of the other party in a private chat
     * @param  string  $last_name  <em>Optional</em>. Last name of the other party in a private chat
     * @param  bool  $is_forum  <em>Optional</em>. <em>True</em>, if the supergroup chat is a forum (has <a href="https://telegram.org/blog/topics-in-groups-collectible-usernames#topics-in-groups">topics</a> enabled)
     * @param  ChatPhoto  $photo  <em>Optional</em>. Chat photo. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>.
     * @param  string[]  $active_usernames  <em>Optional</em>. If non-empty, the list of all <a href="https://telegram.org/blog/topics-in-groups-collectible-usernames#collectible-usernames">active chat usernames</a>; for private chats, supergroups and channels. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>.
     * @param  ReactionType[]  $available_reactions  <em>Optional</em>. List of available reactions allowed in the chat. If omitted, then all <a href="https://core.telegram.org/bots/api#reactiontypeemoji">emoji reactions</a> are allowed. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>.
     * @param  int  $accent_color_id  <em>Optional</em>. Identifier of the accent color for the chat name and backgrounds of the chat photo, reply header, and link preview. See <a href="https://core.telegram.org/bots/api#accent-colors">accent colors</a> for more details. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>. Always returned in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>.
     * @param  string  $background_custom_emoji_id  <em>Optional</em>. Custom emoji identifier of emoji chosen by the chat for the reply header and link preview background. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>.
     * @param  int  $profile_accent_color_id  <em>Optional</em>. Identifier of the accent color for the chat's profile background. See <a href="https://core.telegram.org/bots/api#profile-accent-colors">profile accent colors</a> for more details. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>.
     * @param  string  $profile_background_custom_emoji_id  <em>Optional</em>. Custom emoji identifier of the emoji chosen by the chat for its profile background. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>.
     * @param  string  $emoji_status_custom_emoji_id  <em>Optional</em>. Custom emoji identifier of the emoji status of the chat or the other party in a private chat. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>.
     * @param  int  $emoji_status_expiration_date  <em>Optional</em>. Expiration date of the emoji status of the chat or the other party in a private chat, in Unix time, if any. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>.
     * @param  string  $bio  <em>Optional</em>. Bio of the other party in a private chat. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>.
     * @param  bool  $has_private_forwards  <em>Optional</em>. <em>True</em>, if privacy settings of the other party in the private chat allows to use tg://user?id=<user_id> links only in chats with the user. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>.
     * @param  bool  $has_restricted_voice_and_video_messages  <em>Optional</em>. <em>True</em>, if the privacy settings of the other party restrict sending voice and video note messages in the private chat. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>.
     * @param  bool  $join_to_send_messages  <em>Optional</em>. <em>True</em>, if users need to join the supergroup before they can send messages. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>.
     * @param  bool  $join_by_request  <em>Optional</em>. <em>True</em>, if all users directly joining the supergroup need to be approved by supergroup administrators. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>.
     * @param  string  $description  <em>Optional</em>. Description, for groups, supergroups and channel chats. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>.
     * @param  string  $invite_link  <em>Optional</em>. Primary invite link, for groups, supergroups and channel chats. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>.
     * @param  Message  $pinned_message  <em>Optional</em>. The most recent pinned message (by sending date). Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>.
     * @param  ChatPermissions  $permissions  <em>Optional</em>. Default chat member permissions, for groups and supergroups. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>.
     * @param  int  $slow_mode_delay  <em>Optional</em>. For supergroups, the minimum allowed delay between consecutive messages sent by each unpriviledged user; in seconds. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>.
     * @param  int  $message_auto_delete_time  <em>Optional</em>. The time after which all messages sent to the chat will be automatically deleted; in seconds. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>.
     * @param  bool  $has_aggressive_anti_spam_enabled  <em>Optional</em>. <em>True</em>, if aggressive anti-spam checks are enabled in the supergroup. The field is only available to chat administrators. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>.
     * @param  bool  $has_hidden_members  <em>Optional</em>. <em>True</em>, if non-administrators can only get the list of bots and administrators in the chat. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>.
     * @param  bool  $has_protected_content  <em>Optional</em>. <em>True</em>, if messages from the chat can't be forwarded to other chats. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>.
     * @param  bool  $has_visible_history  <em>Optional</em>. <em>True</em>, if new chat members will have access to old messages; available only to chat administrators. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>.
     * @param  string  $sticker_set_name  <em>Optional</em>. For supergroups, name of group sticker set. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>.
     * @param  bool  $can_set_sticker_set  <em>Optional</em>. <em>True</em>, if the bot can change the group sticker set. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>.
     * @param  int  $linked_chat_id  <em>Optional</em>. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>.
     * @param  ChatLocation  $location  <em>Optional</em>. For supergroups, the location to which the supergroup is connected. Returned only in <a href="https://core.telegram.org/bots/api#getchat">getChat</a>.
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
        ?array $available_reactions = null,
        ?int $accent_color_id = null,
        ?string $background_custom_emoji_id = null,
        ?int $profile_accent_color_id = null,
        ?string $profile_background_custom_emoji_id = null,
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
        ?bool $has_visible_history = null,
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
            'available_reactions' => $available_reactions,
            'accent_color_id' => $accent_color_id,
            'background_custom_emoji_id' => $background_custom_emoji_id,
            'profile_accent_color_id' => $profile_accent_color_id,
            'profile_background_custom_emoji_id' => $profile_background_custom_emoji_id,
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
            'has_visible_history' => $has_visible_history,
            'sticker_set_name' => $sticker_set_name,
            'can_set_sticker_set' => $can_set_sticker_set,
            'linked_chat_id' => $linked_chat_id,
            'location' => $location,
        ]);
    }
}
