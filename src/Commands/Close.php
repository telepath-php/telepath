<?php

namespace Telepath\Commands;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Telepath\Exceptions\TelegramException;

#[AsCommand(
    name: 'server:close',
    description: 'Close the bot instance before moving it from one local server to another.'
)]
class Close extends BotCommand
{
    protected function configure()
    {
        $this->configureBotOptions();
    }

    protected function interact(InputInterface $input, OutputInterface $output)
    {
        $this->interactBotOptions($input, $output);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $bot = $this->makeBot($input, $output);

        try {
            $bot->close();
        } catch (TelegramException $e) {
            $output->writeln("<error>Error: {$e->getMessage()}</error>");

            return self::FAILURE;
        }

        $success = $bot->lastApiResult() ?? 'Close was successful';
        $output->writeln("<info>{$success}</info>");

        return self::SUCCESS;
    }
}
