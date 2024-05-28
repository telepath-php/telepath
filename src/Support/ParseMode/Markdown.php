<?php

namespace Telepath\Support\ParseMode;

class Markdown
{
    /**
     * To escape characters '_', '*', '`', '[' outside of an entity, prepend the characters '\' before them.
     */
    public static function escape(string $text): string
    {
        return preg_replace('/([_*`[])/', '\\\\$1', $text);
    }
}
