<?php

namespace Telepath\Commands;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'webhook:info',
    description: 'Get current webhook status.'
)]
class GetWebhookInfo extends BotCommand
{

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        parent::execute($input, $output);

        $bot = $this->makeBot($input, $output);

        $info = $bot->getWebhookInfo();

        $table = new Table($output);
        $table->setHeaderTitle('WebhookInfo');

        $table->setHeaders([
            'url',
            'has_custom_certificate',
            'pending_update_count',
            'ip_address',
            'last_error_date',
            'last_error_message',
            'last_synchronization_error_date',
            'max_connections',
            'allowed_updates',
        ]);

        $table->setRow(0, [
            $info->url,
            $info->has_custom_certificate ? 'true' : 'false',
            $info->pending_update_count,
            $info->ip_address,
            $info->last_error_date,
            $info->last_error_message,
            $info->last_synchronization_error_date,
            $info->max_connections,
            $info->allowed_updates ? implode(', ', $info->allowed_updates) : null,
        ]);

        $table->setVertical();
        $table->setStyle('box');

        $table->render();

        return self::SUCCESS;
    }

}