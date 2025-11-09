<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object contains full information about a chat.
 */
class ChatFullInfo extends Type
{
    /** Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier. */
    public int $id;

    /** Type of the chat, can be either “private”, “group”, “supergroup” or “channel” */
    public string $type;

    /** Identifier of the accent color for the chat name and backgrounds of the chat photo, reply header, and link preview. See <a href="https://core.telegram.org/bots/api#accent-colors">accent colors</a> for more details. */
    public int $accent_color_id;

    /** The maximum number of reactions that can be set on a message in the chat */
    public int $max_reaction_count;

    /** Information about types of gifts that are accepted by the chat or by the corresponding user for private chats */
    public AcceptedGiftTypes $accepted_gift_types;

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

    /** <em>Optional</em>. <em>True</em>, if the chat is the direct messages chat of a channel */
    public ?bool $is_direct_messages = null;

    /** <em>Optional</em>. Chat photo */
    public ?ChatPhoto $photo = null;

    /**
     * <em>Optional</em>. If non-empty, the list of all <a href="https://telegram.org/blog/topics-in-groups-collectible-usernames#collectible-usernames">active chat usernames</a>; for private chats, supergroups and channels
     *
     * @var string[]
     */
    public ?array $active_usernames = null;

    /** <em>Optional</em>. For private chats, the date of birth of the user */
    public ?Birthdate $birthdate = null;

    /** <em>Optional</em>. For private chats with business accounts, the intro of the business */
    public ?BusinessIntro $business_intro = null;

    /** <em>Optional</em>. For private chats with business accounts, the location of the business */
    public ?BusinessLocation $business_location = null;

    /** <em>Optional</em>. For private chats with business accounts, the opening hours of the business */
    public ?BusinessOpeningHours $business_opening_hours = null;

    /** <em>Optional</em>. For private chats, the personal channel of the user */
    public ?Chat $personal_chat = null;

    /** <em>Optional</em>. Information about the corresponding channel chat; for direct messages chats only */
    public ?Chat $parent_chat = null;

    /**
     * <em>Optional</em>. List of available reactions allowed in the chat. If omitted, then all <a href="https://core.telegram.org/bots/api#reactiontypeemoji">emoji reactions</a> are allowed.
     *
     * @var ReactionType[]
     */
    public ?array $available_reactions = null;

    /** <em>Optional</em>. Custom emoji identifier of the emoji chosen by the chat for the reply header and link preview background */
    public ?string $background_custom_emoji_id = null;

    /** <em>Optional</em>. Identifier of the accent color for the chat's profile background. See <a href="https://core.telegram.org/bots/api#profile-accent-colors">profile accent colors</a> for more details. */
    public ?int $profile_accent_color_id = null;

    /** <em>Optional</em>. Custom emoji identifier of the emoji chosen by the chat for its profile background */
    public ?string $profile_background_custom_emoji_id = null;

    /** <em>Optional</em>. Custom emoji identifier of the emoji status of the chat or the other party in a private chat */
    public ?string $emoji_status_custom_emoji_id = null;

    /** <em>Optional</em>. Expiration date of the emoji status of the chat or the other party in a private chat, in Unix time, if any */
    public ?int $emoji_status_expiration_date = null;

    /** <em>Optional</em>. Bio of the other party in a private chat */
    public ?string $bio = null;

    /** <em>Optional</em>. <em>True</em>, if privacy settings of the other party in the private chat allows to use tg://user?id=<user_id> links only in chats with the user */
    public ?bool $has_private_forwards = null;

    /** <em>Optional</em>. <em>True</em>, if the privacy settings of the other party restrict sending voice and video note messages in the private chat */
    public ?bool $has_restricted_voice_and_video_messages = null;

    /** <em>Optional</em>. <em>True</em>, if users need to join the supergroup before they can send messages */
    public ?bool $join_to_send_messages = null;

    /** <em>Optional</em>. <em>True</em>, if all users directly joining the supergroup without using an invite link need to be approved by supergroup administrators */
    public ?bool $join_by_request = null;

    /** <em>Optional</em>. Description, for groups, supergroups and channel chats */
    public ?string $description = null;

    /** <em>Optional</em>. Primary invite link, for groups, supergroups and channel chats */
    public ?string $invite_link = null;

    /** <em>Optional</em>. The most recent pinned message (by sending date) */
    public ?Message $pinned_message = null;

    /** <em>Optional</em>. Default chat member permissions, for groups and supergroups */
    public ?ChatPermissions $permissions = null;

    /** <em>Optional</em>. <em>True</em>, if paid media messages can be sent or forwarded to the channel chat. The field is available only for channel chats. */
    public ?bool $can_send_paid_media = null;

    /** <em>Optional</em>. For supergroups, the minimum allowed delay between consecutive messages sent by each unprivileged user; in seconds */
    public ?int $slow_mode_delay = null;

    /** <em>Optional</em>. For supergroups, the minimum number of boosts that a non-administrator user needs to add in order to ignore slow mode and chat permissions */
    public ?int $unrestrict_boost_count = null;

    /** <em>Optional</em>. The time after which all messages sent to the chat will be automatically deleted; in seconds */
    public ?int $message_auto_delete_time = null;

    /** <em>Optional</em>. <em>True</em>, if aggressive anti-spam checks are enabled in the supergroup. The field is only available to chat administrators. */
    public ?bool $has_aggressive_anti_spam_enabled = null;

    /** <em>Optional</em>. <em>True</em>, if non-administrators can only get the list of bots and administrators in the chat */
    public ?bool $has_hidden_members = null;

    /** <em>Optional</em>. <em>True</em>, if messages from the chat can't be forwarded to other chats */
    public ?bool $has_protected_content = null;

    /** <em>Optional</em>. <em>True</em>, if new chat members will have access to old messages; available only to chat administrators */
    public ?bool $has_visible_history = null;

    /** <em>Optional</em>. For supergroups, name of the group sticker set */
    public ?string $sticker_set_name = null;

    /** <em>Optional</em>. <em>True</em>, if the bot can change the group sticker set */
    public ?bool $can_set_sticker_set = null;

    /** <em>Optional</em>. For supergroups, the name of the group's custom emoji sticker set. Custom emoji from this set can be used by all users and bots in the group. */
    public ?string $custom_emoji_sticker_set_name = null;

    /** <em>Optional</em>. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier. */
    public ?int $linked_chat_id = null;

    /** <em>Optional</em>. For supergroups, the location to which the supergroup is connected */
    public ?ChatLocation $location = null;

    /**
     * @param  int  $id  Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param  string  $type  Type of the chat, can be either “private”, “group”, “supergroup” or “channel”
     * @param  int  $accent_color_id  Identifier of the accent color for the chat name and backgrounds of the chat photo, reply header, and link preview. See <a href="https://core.telegram.org/bots/api#accent-colors">accent colors</a> for more details.
     * @param  int  $max_reaction_count  The maximum number of reactions that can be set on a message in the chat
     * @param  AcceptedGiftTypes  $accepted_gift_types  Information about types of gifts that are accepted by the chat or by the corresponding user for private chats
     * @param  string  $title  <em>Optional</em>. Title, for supergroups, channels and group chats
     * @param  string  $username  <em>Optional</em>. Username, for private chats, supergroups and channels if available
     * @param  string  $first_name  <em>Optional</em>. First name of the other party in a private chat
     * @param  string  $last_name  <em>Optional</em>. Last name of the other party in a private chat
     * @param  bool  $is_forum  <em>Optional</em>. <em>True</em>, if the supergroup chat is a forum (has <a href="https://telegram.org/blog/topics-in-groups-collectible-usernames#topics-in-groups">topics</a> enabled)
     * @param  bool  $is_direct_messages  <em>Optional</em>. <em>True</em>, if the chat is the direct messages chat of a channel
     * @param  ChatPhoto  $photo  <em>Optional</em>. Chat photo
     * @param  string[]  $active_usernames  <em>Optional</em>. If non-empty, the list of all <a href="https://telegram.org/blog/topics-in-groups-collectible-usernames#collectible-usernames">active chat usernames</a>; for private chats, supergroups and channels
     * @param  Birthdate  $birthdate  <em>Optional</em>. For private chats, the date of birth of the user
     * @param  BusinessIntro  $business_intro  <em>Optional</em>. For private chats with business accounts, the intro of the business
     * @param  BusinessLocation  $business_location  <em>Optional</em>. For private chats with business accounts, the location of the business
     * @param  BusinessOpeningHours  $business_opening_hours  <em>Optional</em>. For private chats with business accounts, the opening hours of the business
     * @param  Chat  $personal_chat  <em>Optional</em>. For private chats, the personal channel of the user
     * @param  Chat  $parent_chat  <em>Optional</em>. Information about the corresponding channel chat; for direct messages chats only
     * @param  ReactionType[]  $available_reactions  <em>Optional</em>. List of available reactions allowed in the chat. If omitted, then all <a href="https://core.telegram.org/bots/api#reactiontypeemoji">emoji reactions</a> are allowed.
     * @param  string  $background_custom_emoji_id  <em>Optional</em>. Custom emoji identifier of the emoji chosen by the chat for the reply header and link preview background
     * @param  int  $profile_accent_color_id  <em>Optional</em>. Identifier of the accent color for the chat's profile background. See <a href="https://core.telegram.org/bots/api#profile-accent-colors">profile accent colors</a> for more details.
     * @param  string  $profile_background_custom_emoji_id  <em>Optional</em>. Custom emoji identifier of the emoji chosen by the chat for its profile background
     * @param  string  $emoji_status_custom_emoji_id  <em>Optional</em>. Custom emoji identifier of the emoji status of the chat or the other party in a private chat
     * @param  int  $emoji_status_expiration_date  <em>Optional</em>. Expiration date of the emoji status of the chat or the other party in a private chat, in Unix time, if any
     * @param  string  $bio  <em>Optional</em>. Bio of the other party in a private chat
     * @param  bool  $has_private_forwards  <em>Optional</em>. <em>True</em>, if privacy settings of the other party in the private chat allows to use tg://user?id=<user_id> links only in chats with the user
     * @param  bool  $has_restricted_voice_and_video_messages  <em>Optional</em>. <em>True</em>, if the privacy settings of the other party restrict sending voice and video note messages in the private chat
     * @param  bool  $join_to_send_messages  <em>Optional</em>. <em>True</em>, if users need to join the supergroup before they can send messages
     * @param  bool  $join_by_request  <em>Optional</em>. <em>True</em>, if all users directly joining the supergroup without using an invite link need to be approved by supergroup administrators
     * @param  string  $description  <em>Optional</em>. Description, for groups, supergroups and channel chats
     * @param  string  $invite_link  <em>Optional</em>. Primary invite link, for groups, supergroups and channel chats
     * @param  Message  $pinned_message  <em>Optional</em>. The most recent pinned message (by sending date)
     * @param  ChatPermissions  $permissions  <em>Optional</em>. Default chat member permissions, for groups and supergroups
     * @param  bool  $can_send_paid_media  <em>Optional</em>. <em>True</em>, if paid media messages can be sent or forwarded to the channel chat. The field is available only for channel chats.
     * @param  int  $slow_mode_delay  <em>Optional</em>. For supergroups, the minimum allowed delay between consecutive messages sent by each unprivileged user; in seconds
     * @param  int  $unrestrict_boost_count  <em>Optional</em>. For supergroups, the minimum number of boosts that a non-administrator user needs to add in order to ignore slow mode and chat permissions
     * @param  int  $message_auto_delete_time  <em>Optional</em>. The time after which all messages sent to the chat will be automatically deleted; in seconds
     * @param  bool  $has_aggressive_anti_spam_enabled  <em>Optional</em>. <em>True</em>, if aggressive anti-spam checks are enabled in the supergroup. The field is only available to chat administrators.
     * @param  bool  $has_hidden_members  <em>Optional</em>. <em>True</em>, if non-administrators can only get the list of bots and administrators in the chat
     * @param  bool  $has_protected_content  <em>Optional</em>. <em>True</em>, if messages from the chat can't be forwarded to other chats
     * @param  bool  $has_visible_history  <em>Optional</em>. <em>True</em>, if new chat members will have access to old messages; available only to chat administrators
     * @param  string  $sticker_set_name  <em>Optional</em>. For supergroups, name of the group sticker set
     * @param  bool  $can_set_sticker_set  <em>Optional</em>. <em>True</em>, if the bot can change the group sticker set
     * @param  string  $custom_emoji_sticker_set_name  <em>Optional</em>. For supergroups, the name of the group's custom emoji sticker set. Custom emoji from this set can be used by all users and bots in the group.
     * @param  int  $linked_chat_id  <em>Optional</em>. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
     * @param  ChatLocation  $location  <em>Optional</em>. For supergroups, the location to which the supergroup is connected
     */
    public static function make(
        int $id,
        string $type,
        int $accent_color_id,
        int $max_reaction_count,
        AcceptedGiftTypes $accepted_gift_types,
        ?string $title = null,
        ?string $username = null,
        ?string $first_name = null,
        ?string $last_name = null,
        ?bool $is_forum = null,
        ?bool $is_direct_messages = null,
        ?ChatPhoto $photo = null,
        ?array $active_usernames = null,
        ?Birthdate $birthdate = null,
        ?BusinessIntro $business_intro = null,
        ?BusinessLocation $business_location = null,
        ?BusinessOpeningHours $business_opening_hours = null,
        ?Chat $personal_chat = null,
        ?Chat $parent_chat = null,
        ?array $available_reactions = null,
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
        ?bool $can_send_paid_media = null,
        ?int $slow_mode_delay = null,
        ?int $unrestrict_boost_count = null,
        ?int $message_auto_delete_time = null,
        ?bool $has_aggressive_anti_spam_enabled = null,
        ?bool $has_hidden_members = null,
        ?bool $has_protected_content = null,
        ?bool $has_visible_history = null,
        ?string $sticker_set_name = null,
        ?bool $can_set_sticker_set = null,
        ?string $custom_emoji_sticker_set_name = null,
        ?int $linked_chat_id = null,
        ?ChatLocation $location = null,
    ): static {
        return new static([
            'id' => $id,
            'type' => $type,
            'accent_color_id' => $accent_color_id,
            'max_reaction_count' => $max_reaction_count,
            'accepted_gift_types' => $accepted_gift_types,
            'title' => $title,
            'username' => $username,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'is_forum' => $is_forum,
            'is_direct_messages' => $is_direct_messages,
            'photo' => $photo,
            'active_usernames' => $active_usernames,
            'birthdate' => $birthdate,
            'business_intro' => $business_intro,
            'business_location' => $business_location,
            'business_opening_hours' => $business_opening_hours,
            'personal_chat' => $personal_chat,
            'parent_chat' => $parent_chat,
            'available_reactions' => $available_reactions,
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
            'can_send_paid_media' => $can_send_paid_media,
            'slow_mode_delay' => $slow_mode_delay,
            'unrestrict_boost_count' => $unrestrict_boost_count,
            'message_auto_delete_time' => $message_auto_delete_time,
            'has_aggressive_anti_spam_enabled' => $has_aggressive_anti_spam_enabled,
            'has_hidden_members' => $has_hidden_members,
            'has_protected_content' => $has_protected_content,
            'has_visible_history' => $has_visible_history,
            'sticker_set_name' => $sticker_set_name,
            'can_set_sticker_set' => $can_set_sticker_set,
            'custom_emoji_sticker_set_name' => $custom_emoji_sticker_set_name,
            'linked_chat_id' => $linked_chat_id,
            'location' => $location,
        ]);
    }
}
