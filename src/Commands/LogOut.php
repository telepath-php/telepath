<?php

namespace Telepath\Commands;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Telepath\Exceptions\TelegramException;

#[AsCommand(
    name: 'server:logout',
    description: 'Log out from the cloud Bot API server before launching the bot locally.'
)]
class LogOut extends BotCommand
{

    protected function configure()
    {
        $this->configureBotOptions();
    }

    protected function interact(InputInterface $input, OutputInterface $output)
    {
        $this->interactBotOptions($input, $output);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $bot = $this->makeBot($input, $output);

        try {
            $bot->logOut();
        } catch (TelegramException $e) {
            $output->writeln("<error>Error: {$e->getMessage()}</error>");
            return self::FAILURE;
        }

        $success = $bot->lastApiResult() ?? 'LogOut was successful';
        $output->writeln("<info>{$success}</info>");

        $time = new \DateTime('+10 minutes');
        $output->writeln("<warn>/!\ Please note that you will not be able to log back in to the cloud Bot API server for 10 minutes from now (until {$time->format('H:i:s T')}).</warn>");

        return self::SUCCESS;
    }

}