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
        $this->configureBotArguments();

        $this->addOption('drop-pending-updates', 'd', InputOption::VALUE_NONE, 'Drop all pending updates');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        parent::execute($input, $output);

        $bot = $this->makeBot($input, $output);

        $dropPendingUpdates = $input->getOption('drop-pending-updates') ?: null;

        try {
            $bot->deleteWebhook(
                drop_pending_updates: $dropPendingUpdates
            );
        } catch (TelegramException $e) {
            \Termwind\render('<div class="error">' . $e->getMessage() . '</div>');
            return self::FAILURE;
        }

        \Termwind\render('<div class="success">' . $bot->lastApiResult() . '</div>');
        return self::SUCCESS;
    }

}