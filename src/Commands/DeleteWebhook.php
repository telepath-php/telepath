<?php

namespace Telepath\Commands;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Telepath\Exceptions\TelegramException;

#[AsCommand(
    name: 'webhook:delete', description: 'Remove webhook integration.'
)]
class DeleteWebhook extends BotCommand
{
    protected function configure()
    {
        $this->configureBotOptions();

        $this->addOption('drop-pending-updates', 'd', InputOption::VALUE_NONE, 'Drop all pending updates');
    }

    protected function interact(InputInterface $input, OutputInterface $output)
    {
        $this->interactBotOptions($input, $output);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $bot = $this->makeBot($input, $output);

        $dropPendingUpdates = $input->getOption('drop-pending-updates') ?: null;

        try {
            $bot->deleteWebhook(
                drop_pending_updates: $dropPendingUpdates
            );
        } catch (TelegramException $e) {
            $output->writeln("<error>Error: {$e->getMessage()}</error>");

            return self::FAILURE;
        }

        $output->writeln("<info>{$bot->lastApiResult()}</info>");

        return self::SUCCESS;
    }
}
