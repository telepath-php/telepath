<?php

/**
 * This file is auto-generated.
 */

namespace Telepath\Telegram;

use Telepath\Types\Type;

/**
 * This object represents a story.
 */
class Story extends Type
{
    /** Chat that posted the story */
    public Chat $chat;

    /** Unique identifier for the story in the chat */
    public int $id;

    /**
     * @param  Chat  $chat  Chat that posted the story
     * @param  int  $id  Unique identifier for the story in the chat
     */
    public static function make(Chat $chat, int $id): static
    {
        return new static([
            'chat' => $chat,
            'id' => $id,
        ]);
    }
}
