<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

/**
 * Represents a link to a sticker stored on the Telegram servers. By default, this sticker will be sent by the user. Alternatively, you can use <em>input_message_content</em> to send a message with the specified content instead of the sticker.
 */
class InlineQueryResultCachedSticker extends InlineQueryResult
{
    /** Type of the result, must be <em>sticker</em> */
    public string $type = 'sticker';

    /** A valid file identifier of the sticker */
    public string $sticker_file_id;

    /** <em>Optional</em>. Content of the message to be sent instead of the sticker */
    public ?InputMessageContent $input_message_content = null;

    /**
     * @param  string  $id Unique identifier for this result, 1-64 bytes
     * @param  string  $sticker_file_id A valid file identifier of the sticker
     * @param  InlineKeyboardMarkup  $reply_markup <em>Optional</em>. <a href="https://core.telegram.org/bots/features#inline-keyboards">Inline keyboard</a> attached to the message
     * @param  InputMessageContent  $input_message_content <em>Optional</em>. Content of the message to be sent instead of the sticker
     */
    public static function make(
        string $id,
        string $sticker_file_id,
        InlineKeyboardMarkup $reply_markup = null,
        InputMessageContent $input_message_content = null,
    ): static {
        return new static([
            'id' => $id,
            'sticker_file_id' => $sticker_file_id,
            'reply_markup' => $reply_markup,
            'input_message_content' => $input_message_content,
        ]);
    }
}
