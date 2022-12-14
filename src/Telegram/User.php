<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a Telegram user or bot.
 */
class User extends Type
{
    /** Unique identifier for this user or bot. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. */
    public int $id;

    /** True, if this user is a bot */
    public bool $is_bot;

    /** User's or bot's first name */
    public string $first_name;

    /** Optional. User's or bot's last name */
    public ?string $last_name = null;

    /** Optional. User's or bot's username */
    public ?string $username = null;

    /** Optional. IETF language tag of the user's language */
    public ?string $language_code = null;

    /** Optional. True, if this user is a Telegram Premium user */
    public ?bool $is_premium = null;

    /** Optional. True, if this user added the bot to the attachment menu */
    public ?bool $added_to_attachment_menu = null;

    /** Optional. True, if the bot can be invited to groups. Returned only in getMe. */
    public ?bool $can_join_groups = null;

    /** Optional. True, if privacy mode is disabled for the bot. Returned only in getMe. */
    public ?bool $can_read_all_group_messages = null;

    /** Optional. True, if the bot supports inline queries. Returned only in getMe. */
    public ?bool $supports_inline_queries = null;

    /**
     * @param int $id Unique identifier for this user or bot. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param bool $is_bot True, if this user is a bot
     * @param string $first_name User's or bot's first name
     * @param string $last_name Optional. User's or bot's last name
     * @param string $username Optional. User's or bot's username
     * @param string $language_code Optional. IETF language tag of the user's language
     * @param bool $is_premium Optional. True, if this user is a Telegram Premium user
     * @param bool $added_to_attachment_menu Optional. True, if this user added the bot to the attachment menu
     * @param bool $can_join_groups Optional. True, if the bot can be invited to groups. Returned only in getMe.
     * @param bool $can_read_all_group_messages Optional. True, if privacy mode is disabled for the bot. Returned only in getMe.
     * @param bool $supports_inline_queries Optional. True, if the bot supports inline queries. Returned only in getMe.
     */
    public static function make(
        int $id,
        bool $is_bot,
        string $first_name,
        ?string $last_name = null,
        ?string $username = null,
        ?string $language_code = null,
        ?bool $is_premium = null,
        ?bool $added_to_attachment_menu = null,
        ?bool $can_join_groups = null,
        ?bool $can_read_all_group_messages = null,
        ?bool $supports_inline_queries = null,
    ): static {
        return new static([
            'id' => $id,
            'is_bot' => $is_bot,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'username' => $username,
            'language_code' => $language_code,
            'is_premium' => $is_premium,
            'added_to_attachment_menu' => $added_to_attachment_menu,
            'can_join_groups' => $can_join_groups,
            'can_read_all_group_messages' => $can_read_all_group_messages,
            'supports_inline_queries' => $supports_inline_queries,
        ]);
    }
}
