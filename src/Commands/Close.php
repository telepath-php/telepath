<?php

namespace Telepath\Commands;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Telepath\Exceptions\TelegramException;

#[AsCommand(
    name: 'close',
    description: 'Close the bot instance before moving it from one local server to another.'
)]
class Close extends BotCommand
{
    protected function configure()
    {
        $this->configureBotArguments();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        parent::execute($input, $output);

        $bot = $this->makeBot($input, $output);

        try {
            $bot->close();
        } catch (TelegramException $e) {
            \Termwind\render('<div class="error">' . $e->getMessage() . '</div>');
            return self::FAILURE;
        }

        $success = $bot->lastApiResult() ?? 'Close was successful';
        \Termwind\render('<div class="success">' . $success . '</div>');
        return self::SUCCESS;
    }


}