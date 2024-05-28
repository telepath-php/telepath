<?php

namespace Telepath\Support\ParseMode;

class MarkdownV2
{
    /**
     * In all other places characters '_', '*', '[', ']', '(', ')', '~', '`', '>', '#', '+', '-', '=', '|', '{', '}', '.', '!' must be escaped with the preceding character '\'.
     */
    public static function escape(string $text): string
    {
        return preg_replace('/([_*[\]()~`>#+\-=|{}.!\\\\])/', '\\\\$1', $text);
    }

    /**
     * Inside pre and code entities, all '`' and '\' characters must be escaped with a preceding '\' character.
     */
    public static function escapeLink(string $text): string
    {
        return preg_replace('/([`\\\\])/', '\\\\$1', $text);
    }

    /**
     * Inside the (...) part of the inline link and custom emoji definition, all ')' and '\' must be escaped with a preceding '\' character.
     */
    public static function escapeImageUrl(string $text): string
    {
        return preg_replace('/([)\\\\])/', '\\\\$1', $text);
    }
}
