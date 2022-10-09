<?php

namespace Telepath\Types\Extensions;

use Telepath\Telegram\Message;

/**
 * @mixin Message
 */
trait MessageExtension
{

    public function text(bool $withBotCommand = false): ?string
    {
        $text = $this->text;
        $offset = 0;

        foreach ($this->entities as $entity) {
            if (! $withBotCommand && $entity->type === 'bot_command') {
                $text = substr_replace($text, '', $offset + $entity->offset, $entity->length);
                $offset += $entity->length;
            }
        }

        return trim($text) ?: null;
    }

}