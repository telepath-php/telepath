<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

use Tii\Telepath\Types\Factory;
use Tii\Telepath\Types\Type;

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

    public static function factory(array $data): static
    {
        return match($data['type']) {
            'audio' => new InlineQueryResultAudio($data),
            'document' => new InlineQueryResultDocument($data),
            'gif' => new InlineQueryResultGif($data),
            'mpeg4_gif' => new InlineQueryResultMpeg4Gif($data),
            'photo' => new InlineQueryResultPhoto($data),
            'sticker' => new InlineQueryResultCachedSticker($data),
            'video' => new InlineQueryResultVideo($data),
            'voice' => new InlineQueryResultVoice($data),
            'article' => new InlineQueryResultArticle($data),
            'contact' => new InlineQueryResultContact($data),
            'game' => new InlineQueryResultGame($data),
            'location' => new InlineQueryResultLocation($data),
            'venue' => new InlineQueryResultVenue($data),
        };
    }
}
