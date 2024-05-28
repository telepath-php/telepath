<?php

namespace Telepath\Handlers\Message;

use Attribute;
use Telepath\Bot;
use Telepath\Telegram\Update;

#[Attribute(Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
class Command extends Message
{
    public function __construct(
        protected string $command,
    ) {
        $this->command = '/'.ltrim($this->command, '/');
    }

    public function responsible(Bot $bot, Update $update): bool
    {
        if (! parent::responsible($bot, $update)) {
            return false;
        }

        $command = strtok($update->message->text ?? '', ' ');

        if (str_contains($command, '@')) {
            [$command, $username] = explode('@', $command, 2);

            if ($username !== $bot->username()) {
                return false;
            }
        }

        return mb_strtolower($command) === mb_strtolower($this->command);
    }
}
