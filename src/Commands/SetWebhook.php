<?php

namespace Telepath\Commands;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\QuestionHelper;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;
use Telepath\TelegramBot;

#[AsCommand(
    name: 'set-webhook',
    description: 'Registers a webhook with Telegram servers.'
)]
class SetWebhook extends Command
{

    protected function configure()
    {
        $this->addOption('api-url', null, InputOption::VALUE_OPTIONAL, 'URL to the Bot API Server to use', false);
        $this->addOption('token', null, InputOption::VALUE_REQUIRED, 'Telegram Bot API Token');

        $this->addArgument('url', InputArgument::OPTIONAL, 'URL that points to your web endpoint');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $apiUrl = match($input->getOption('api-url')) {
            null => $this->ask($input, $output,
                '<question>URL to Bot API Server to use</question>: '),
            false => TelegramBot::DEFAULT_API_SERVER_URL,
            default => $input->getOption('api-url')
        };

        $output->writeln("Got for API URL: $apiUrl");

        return Command::SUCCESS;
    }

    protected function ask(InputInterface $input, OutputInterface $output, string $question, $default = null): string
    {
        /** @var QuestionHelper $helper */
        $helper = $this->getHelper('question');

        $question = new Question($question, $default);
        $question->setValidator(function ($answer) {
            if ($answer === null) {
                throw new \RuntimeException('You need to pass a value.');
            }

            return $answer;
        });

        return $helper->ask($input, $output, $question);
    }

}