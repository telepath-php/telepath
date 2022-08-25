<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

use Tii\Telepath\Types\Type;

/**
 * This object represents one special entity in a text message. For example, hashtags, usernames, URLs, etc.
 */
class MessageEntity extends Type
{
    /** Type of the entity. Currently, can be “mention” (@username), “hashtag” (#hashtag), “cashtag” ($USD), “bot_command” (/start@jobs_bot), “url” (https://telegram.org), “email” (do-not-reply@telegram.org), “phone_number” (+1-212-555-0123), “bold” (bold text), “italic” (italic text), “underline” (underlined text), “strikethrough” (strikethrough text), “spoiler” (spoiler message), “code” (monowidth string), “pre” (monowidth block), “text_link” (for clickable text URLs), “text_mention” (for users without usernames), “custom_emoji” (for inline custom emoji stickers) */
    public string $type;

    /** Offset in UTF-16 code units to the start of the entity */
    public int $offset;

    /** Length of the entity in UTF-16 code units */
    public int $length;

    /** Optional. For “text_link” only, URL that will be opened after user taps on the text */
    public ?string $url = null;

    /** Optional. For “text_mention” only, the mentioned user */
    public ?User $user = null;

    /** Optional. For “pre” only, the programming language of the entity text */
    public ?string $language = null;

    /** Optional. For “custom_emoji” only, unique identifier of the custom emoji. Use getCustomEmojiStickers to get full information about the sticker */
    public ?string $custom_emoji_id = null;

    /**
     * @param string $type Type of the entity. Currently, can be “mention” (@username), “hashtag” (#hashtag), “cashtag” ($USD), “bot_command” (/start@jobs_bot), “url” (https://telegram.org), “email” (do-not-reply@telegram.org), “phone_number” (+1-212-555-0123), “bold” (bold text), “italic” (italic text), “underline” (underlined text), “strikethrough” (strikethrough text), “spoiler” (spoiler message), “code” (monowidth string), “pre” (monowidth block), “text_link” (for clickable text URLs), “text_mention” (for users without usernames), “custom_emoji” (for inline custom emoji stickers)
     * @param int $offset Offset in UTF-16 code units to the start of the entity
     * @param int $length Length of the entity in UTF-16 code units
     * @param string $url Optional. For “text_link” only, URL that will be opened after user taps on the text
     * @param User $user Optional. For “text_mention” only, the mentioned user
     * @param string $language Optional. For “pre” only, the programming language of the entity text
     * @param string $custom_emoji_id Optional. For “custom_emoji” only, unique identifier of the custom emoji. Use getCustomEmojiStickers to get full information about the sticker
     */
    public static function make(
        string $type,
        int $offset,
        int $length,
        ?string $url = null,
        ?User $user = null,
        ?string $language = null,
        ?string $custom_emoji_id = null
    ): static {
        return new static([
            'type' => $type,
            'offset' => $offset,
            'length' => $length,
            'url' => $url,
            'user' => $user,
            'language' => $language,
            'custom_emoji_id' => $custom_emoji_id,
        ]);
    }
}
