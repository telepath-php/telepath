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

    /** Type of the chat, can be either “private”, “group”, “supergroup” or “channel” */
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

    /** <em>Optional</em>. <em>True</em>, if the chat is the direct messages chat of a channel */
    public ?bool $is_direct_messages = null;

    /**
     * @param  int  $id  Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param  string  $type  Type of the chat, can be either “private”, “group”, “supergroup” or “channel”
     * @param  string  $title  <em>Optional</em>. Title, for supergroups, channels and group chats
     * @param  string  $username  <em>Optional</em>. Username, for private chats, supergroups and channels if available
     * @param  string  $first_name  <em>Optional</em>. First name of the other party in a private chat
     * @param  string  $last_name  <em>Optional</em>. Last name of the other party in a private chat
     * @param  bool  $is_forum  <em>Optional</em>. <em>True</em>, if the supergroup chat is a forum (has <a href="https://telegram.org/blog/topics-in-groups-collectible-usernames#topics-in-groups">topics</a> enabled)
     * @param  bool  $is_direct_messages  <em>Optional</em>. <em>True</em>, if the chat is the direct messages chat of a channel
     */
    public static function make(
        int $id,
        string $type,
        ?string $title = null,
        ?string $username = null,
        ?string $first_name = null,
        ?string $last_name = null,
        ?bool $is_forum = null,
        ?bool $is_direct_messages = null,
    ): static {
        return new static([
            'id' => $id,
            'type' => $type,
            'title' => $title,
            'username' => $username,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'is_forum' => $is_forum,
            'is_direct_messages' => $is_direct_messages,
        ]);
    }
}
