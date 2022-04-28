<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents a chat.
 */
class Chat extends \Tii\Telepath\Type
{
	/** Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier. */
	public int $id;

	/** Type of chat, can be either “private”, “group”, “supergroup” or “channel” */
	public string $type;

	/** Optional. Title, for supergroups, channels and group chats */
	public ?string $title;

	/** Optional. Username, for private chats, supergroups and channels if available */
	public ?string $username;

	/** Optional. First name of the other party in a private chat */
	public ?string $first_name;

	/** Optional. Last name of the other party in a private chat */
	public ?string $last_name;

	/** Optional. Chat photo. Returned only in getChat. */
	public ?ChatPhoto $photo;

	/** Optional. Bio of the other party in a private chat. Returned only in getChat. */
	public ?string $bio;

	/** Optional. True, if privacy settings of the other party in the private chat allows to use tg://user?id=<user_id> links only in chats with the user. Returned only in getChat. */
	public ?bool $has_private_forwards;

	/** Optional. Description, for groups, supergroups and channel chats. Returned only in getChat. */
	public ?string $description;

	/** Optional. Primary invite link, for groups, supergroups and channel chats. Returned only in getChat. */
	public ?string $invite_link;

	/** Optional. The most recent pinned message (by sending date). Returned only in getChat. */
	public ?Message $pinned_message;

	/** Optional. Default chat member permissions, for groups and supergroups. Returned only in getChat. */
	public ?ChatPermissions $permissions;

	/** Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each unpriviledged user; in seconds. Returned only in getChat. */
	public ?int $slow_mode_delay;

	/** Optional. The time after which all messages sent to the chat will be automatically deleted; in seconds. Returned only in getChat. */
	public ?int $message_auto_delete_time;

	/** Optional. True, if messages from the chat can't be forwarded to other chats. Returned only in getChat. */
	public ?bool $has_protected_content;

	/** Optional. For supergroups, name of group sticker set. Returned only in getChat. */
	public ?string $sticker_set_name;

	/** Optional. True, if the bot can change the group sticker set. Returned only in getChat. */
	public ?bool $can_set_sticker_set;

	/** Optional. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier. Returned only in getChat. */
	public ?int $linked_chat_id;

	/** Optional. For supergroups, the location to which the supergroup is connected. Returned only in getChat. */
	public ?ChatLocation $location;
}
