<?php

namespace Telepath\Commands;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Telepath\Exceptions\TelegramException;
use Telepath\Types\InputFile;
use function Termwind\{render};

#[AsCommand(
    name: 'set-webhook',
    description: 'Registers a webhook with Telegram servers.'
)]
class SetWebhook extends BotCommand
{

    protected function configure()
    {
        $this->configureBotArguments();

        $this->addArgument('url', InputArgument::OPTIONAL, 'HTTPS URL to send updates to');

        $this->addOption('certificate', 'c', InputOption::VALUE_REQUIRED, 'Path to your public key certificate');
        $this->addOption('ip-address', 'i', InputOption::VALUE_REQUIRED,
            'The fixed IP address which will be used to send webhook requests instead of the IP address resolved through DNS');
        $this->addOption('max-connections', 'm', InputOption::VALUE_REQUIRED,
            'The maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery');
        $this->addOption('allowed-updates', 'a', InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY,
            'A list of the update types you want your bot to receive. For example, specify --allowed-updates message --allowed-updates edited_channel_post --allowed-updates callback_query');
        $this->addOption('drop-pending-updates', 'd', InputOption::VALUE_NONE, 'Drop all pending updates');
        $this->addOption('secret-token', 's', InputOption::VALUE_REQUIRED,
            'A secret token to be sent in a header “X-Telegram-Bot-Api-Secret-Token” in every webhook request');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        parent::execute($input, $output);

        $bot = $this->makeBot($input, $output);

        $url = $input->getArgument('url') ?? $this->ask('Webhook URL: ');
        $certificate = $input->getOption('certificate');
        $ipAddress = $input->getOption('ip-address');
        $maxConnections = $input->getOption('max-connections');
        $allowedUpdates = $input->getOption('allowed-updates') ?: null;
        $dropPendingUpdates = $input->getOption('drop-pending-updates') ?: null;
        $secretToken = $input->getOption('secret-token');

        $certificateFile = $certificate !== null ? InputFile::fromFile($certificate) : null;

        try {
            $bot->setWebhook(
                url: $url,
                certificate: $certificateFile,
                ip_address: $ipAddress,
                max_connections: $maxConnections,
                allowed_updates: $allowedUpdates,
                drop_pending_updates: $dropPendingUpdates,
                secret_token: $secretToken
            );
        } catch (TelegramException $e) {
            render(<<<HTML
                <div class="error">{$e->getMessage()}</div>
            HTML);
            return Command::FAILURE;
        }

        render(<<<'HTML'
            <div class="success">Webhook was set successfully.</div>
        HTML);
        return Command::SUCCESS;
    }

}