<?php

namespace Telepath\Commands;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'bot:info',
    description: 'Get basic information about the bot'
)]
class GetMe extends BotCommand
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

        $user = $bot->getMe();

        $table = new Table($output);
        $table->setHeaderTitle('User');

        $table->setHeaders([
            'id',
            'is_bot',
            'first_name',
            'last_name',
            'username',
            'can_join_groups',
            'can_read_all_group_messages',
            'supports_inline_queries',
        ]);

        $table->setRow(0, [
            $user->id,
            $user->is_bot ? 'true' : 'false',
            $user->first_name,
            $user->last_name,
            $user->username,
            $user->can_join_groups ? 'true' : 'false',
            $user->can_read_all_group_messages ? 'true' : 'false',
            $user->supports_inline_queries ? 'true' : 'false',
        ]);

        $table->setVertical();
        $table->setStyle('box');

        $table->render();

        return self::SUCCESS;
    }


}