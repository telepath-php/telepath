<?php

namespace Tii\Telepath\Handler\Message;

use Tii\Telepath\Handler\Message;
use Tii\Telepath\Telegram\Update;
use Tii\Telepath\TelegramBot;

#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class Command extends Message
{

    public function __construct(
        protected string $command,
    ) {
        $this->command = '/' . ltrim($this->command, '/');
    }

    public function responsible(Update $update, TelegramBot $bot): bool
    {
        if (! parent::responsible($update, $bot)) {
            return false;
        }

        $command = strtok($update->message->text ?? '', ' ');

        if (str_contains($command, '@')) {
            [$command, $username] = explode('@', $command, 2);

            if ($username !== $bot->username) {
                return false;
            }
        }

        return mb_strtolower($command) === mb_strtolower($this->command);
    }
}