<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Bot;
use Telepath\Types\Factory;
use Telepath\Types\Type;

/**
 * This object represents one result of an inline query. Telegram clients currently support results of the following 20 types:
 */
abstract class InlineQueryResult extends Type implements Factory
{
    /** Type of the result */
    public string $type;

    /** Unique identifier for this result, 1-64 bytes */
    public string $id;

    /** Optional. Inline keyboard attached to the message */
    public ?InlineKeyboardMarkup $reply_markup = null;

    public static function factory(array $data, Bot $bot = null): self
    {
        return match($data['type']) {
            'audio' => new InlineQueryResultAudio($data, $bot),
            'document' => new InlineQueryResultDocument($data, $bot),
            'gif' => new InlineQueryResultGif($data, $bot),
            'mpeg4_gif' => new InlineQueryResultMpeg4Gif($data, $bot),
            'photo' => new InlineQueryResultPhoto($data, $bot),
            'sticker' => new InlineQueryResultCachedSticker($data, $bot),
            'video' => new InlineQueryResultVideo($data, $bot),
            'voice' => new InlineQueryResultVoice($data, $bot),
            'article' => new InlineQueryResultArticle($data, $bot),
            'contact' => new InlineQueryResultContact($data, $bot),
            'game' => new InlineQueryResultGame($data, $bot),
            'location' => new InlineQueryResultLocation($data, $bot),
            'venue' => new InlineQueryResultVenue($data, $bot),
        };
    }
}
