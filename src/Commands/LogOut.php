<?php

namespace Telepath\Commands;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Telepath\Exceptions\TelegramException;

#[AsCommand(
    name: 'logout',
    description: 'Log out from the cloud Bot API server before launching the bot locally.'
)]
class LogOut extends BotCommand
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
            $bot->logOut();
        } catch (TelegramException $e) {
            \Termwind\render('<div class="error">' . $e->getMessage() . '</div>');
            return self::FAILURE;
        }

        $success = $bot->lastApiResult() ?? 'logOut was successful';
        \Termwind\render('<div class="success">' . $success . '</div>');

        $time = new \DateTime('+10 minutes');
        \Termwind\render(<<<HTML
            <div class="mt-1 px-1 py-1 bg-orange-700 text-white">
                Please note that you will not be able to log back in to the cloud Bot API server for 10 minutes from now ({$time->format('H:i:s')} UTC).
            </div>
        HTML);

        return self::SUCCESS;
    }

}