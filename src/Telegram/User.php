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

    /** <em>True</em>, if this user is a bot */
    public bool $is_bot;

    /** User's or bot's first name */
    public string $first_name;

    /** <em>Optional</em>. User's or bot's last name */
    public ?string $last_name = null;

    /** <em>Optional</em>. User's or bot's username */
    public ?string $username = null;

    /** <em>Optional</em>. <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tag</a> of the user's language */
    public ?string $language_code = null;

    /** <em>Optional</em>. <em>True</em>, if this user is a Telegram Premium user */
    public ?bool $is_premium = null;

    /** <em>Optional</em>. <em>True</em>, if this user added the bot to the attachment menu */
    public ?bool $added_to_attachment_menu = null;

    /** <em>Optional</em>. <em>True</em>, if the bot can be invited to groups. Returned only in <a href="https://core.telegram.org/bots/api#getme">getMe</a>. */
    public ?bool $can_join_groups = null;

    /** <em>Optional</em>. <em>True</em>, if <a href="https://core.telegram.org/bots/features#privacy-mode">privacy mode</a> is disabled for the bot. Returned only in <a href="https://core.telegram.org/bots/api#getme">getMe</a>. */
    public ?bool $can_read_all_group_messages = null;

    /** <em>Optional</em>. <em>True</em>, if the bot supports inline queries. Returned only in <a href="https://core.telegram.org/bots/api#getme">getMe</a>. */
    public ?bool $supports_inline_queries = null;

    /**
     * @param  int  $id  Unique identifier for this user or bot. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param  bool  $is_bot  <em>True</em>, if this user is a bot
     * @param  string  $first_name  User's or bot's first name
     * @param  string  $last_name  <em>Optional</em>. User's or bot's last name
     * @param  string  $username  <em>Optional</em>. User's or bot's username
     * @param  string  $language_code  <em>Optional</em>. <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tag</a> of the user's language
     * @param  bool  $is_premium  <em>Optional</em>. <em>True</em>, if this user is a Telegram Premium user
     * @param  bool  $added_to_attachment_menu  <em>Optional</em>. <em>True</em>, if this user added the bot to the attachment menu
     * @param  bool  $can_join_groups  <em>Optional</em>. <em>True</em>, if the bot can be invited to groups. Returned only in <a href="https://core.telegram.org/bots/api#getme">getMe</a>.
     * @param  bool  $can_read_all_group_messages  <em>Optional</em>. <em>True</em>, if <a href="https://core.telegram.org/bots/features#privacy-mode">privacy mode</a> is disabled for the bot. Returned only in <a href="https://core.telegram.org/bots/api#getme">getMe</a>.
     * @param  bool  $supports_inline_queries  <em>Optional</em>. <em>True</em>, if the bot supports inline queries. Returned only in <a href="https://core.telegram.org/bots/api#getme">getMe</a>.
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
