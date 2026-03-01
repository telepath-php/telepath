<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents one special entity in a text message. For example, hashtags, usernames, URLs, etc.
 */
class MessageEntity extends Type
{
    /** Type of the entity. Currently, can be “mention” (@username), “hashtag” (#hashtag or #hashtag@chatusername), “cashtag” ($USD or $USD@chatusername), “bot_command” (/start@jobs_bot), “url” (https://telegram.org), “email” (do-not-reply@telegram.org), “phone_number” (+1-212-555-0123), “bold” (bold text), “italic” (<em>italic text</em>), “underline” (underlined text), “strikethrough” (strikethrough text), “spoiler” (spoiler message), “blockquote” (block quotation), “expandable_blockquote” (collapsed-by-default block quotation), “code” (monowidth string), “pre” (monowidth block), “text_link” (for clickable text URLs), “text_mention” (for users <a href="https://telegram.org/blog/edit#new-mentions">without usernames</a>), “custom_emoji” (for inline custom emoji stickers), or “date_time” (for formatted date and time) */
    public string $type;

    /** Offset in <a href="https://core.telegram.org/api/entities#entity-length">UTF-16 code units</a> to the start of the entity */
    public int $offset;

    /** Length of the entity in <a href="https://core.telegram.org/api/entities#entity-length">UTF-16 code units</a> */
    public int $length;

    /** <em>Optional</em>. For “text_link” only, URL that will be opened after user taps on the text */
    public ?string $url = null;

    /** <em>Optional</em>. For “text_mention” only, the mentioned user */
    public ?User $user = null;

    /** <em>Optional</em>. For “pre” only, the programming language of the entity text */
    public ?string $language = null;

    /** <em>Optional</em>. For “custom_emoji” only, unique identifier of the custom emoji. Use <a href="https://core.telegram.org/bots/api#getcustomemojistickers">getCustomEmojiStickers</a> to get full information about the sticker */
    public ?string $custom_emoji_id = null;

    /** <em>Optional</em>. For “date_time” only, the Unix time associated with the entity */
    public ?int $unix_time = null;

    /** <em>Optional</em>. For “date_time” only, the string that defines the formatting of the date and time. See <a href="https://core.telegram.org/bots/api#date-time-entity-formatting">date-time entity formatting</a> for more details. */
    public ?string $date_time_format = null;

    /**
     * @param  string  $type  Type of the entity. Currently, can be “mention” (@username), “hashtag” (#hashtag or #hashtag@chatusername), “cashtag” ($USD or $USD@chatusername), “bot_command” (/start@jobs_bot), “url” (https://telegram.org), “email” (do-not-reply@telegram.org), “phone_number” (+1-212-555-0123), “bold” (bold text), “italic” (<em>italic text</em>), “underline” (underlined text), “strikethrough” (strikethrough text), “spoiler” (spoiler message), “blockquote” (block quotation), “expandable_blockquote” (collapsed-by-default block quotation), “code” (monowidth string), “pre” (monowidth block), “text_link” (for clickable text URLs), “text_mention” (for users <a href="https://telegram.org/blog/edit#new-mentions">without usernames</a>), “custom_emoji” (for inline custom emoji stickers), or “date_time” (for formatted date and time)
     * @param  int  $offset  Offset in <a href="https://core.telegram.org/api/entities#entity-length">UTF-16 code units</a> to the start of the entity
     * @param  int  $length  Length of the entity in <a href="https://core.telegram.org/api/entities#entity-length">UTF-16 code units</a>
     * @param  string  $url  <em>Optional</em>. For “text_link” only, URL that will be opened after user taps on the text
     * @param  User  $user  <em>Optional</em>. For “text_mention” only, the mentioned user
     * @param  string  $language  <em>Optional</em>. For “pre” only, the programming language of the entity text
     * @param  string  $custom_emoji_id  <em>Optional</em>. For “custom_emoji” only, unique identifier of the custom emoji. Use <a href="https://core.telegram.org/bots/api#getcustomemojistickers">getCustomEmojiStickers</a> to get full information about the sticker
     * @param  int  $unix_time  <em>Optional</em>. For “date_time” only, the Unix time associated with the entity
     * @param  string  $date_time_format  <em>Optional</em>. For “date_time” only, the string that defines the formatting of the date and time. See <a href="https://core.telegram.org/bots/api#date-time-entity-formatting">date-time entity formatting</a> for more details.
     */
    public static function make(
        string $type,
        int $offset,
        int $length,
        ?string $url = null,
        ?User $user = null,
        ?string $language = null,
        ?string $custom_emoji_id = null,
        ?int $unix_time = null,
        ?string $date_time_format = null,
    ): static {
        return new static([
            'type' => $type,
            'offset' => $offset,
            'length' => $length,
            'url' => $url,
            'user' => $user,
            'language' => $language,
            'custom_emoji_id' => $custom_emoji_id,
            'unix_time' => $unix_time,
            'date_time_format' => $date_time_format,
        ]);
    }
}
