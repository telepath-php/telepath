<?php

namespace Telepath\Commands;

use Dotenv\Dotenv;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Helper\QuestionHelper;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;
use Telepath\Bot;
use Telepath\Facades\BotBuilder;
use function Termwind\style;

abstract class BotCommand extends Command
{

    public function __construct(string $name = null)
    {
        parent::__construct($name);

        // Load .env file if it exists
        if ($cwd = getcwd()) {
            $dotenv = Dotenv::createImmutable($cwd);
            $dotenv->safeLoad();
        }
    }

    protected function initialize(InputInterface $input, OutputInterface $output)
    {
        $warnStyle = new OutputFormatterStyle('black', 'bright-yellow', ['bold']);
        $output->getFormatter()->setStyle('warn', $warnStyle);
    }

    protected function configureBotOptions()
    {
        $this->addOption('token', 't', InputOption::VALUE_OPTIONAL,
            'Telegram Bot API Token. Can be specified as TELEGRAM_API_TOKEN in your .env file.');

        $defaultApiUrl = Bot::DEFAULT_API_SERVER_URL;
        $this->addOption('api-url', null, InputOption::VALUE_OPTIONAL,
            "Telegram Bot API Server to use. Can be specified as TELEGRAM_API_URL in your .env file. (Default: {$defaultApiUrl})");

        $this->addOption('proxy', null, InputOption::VALUE_OPTIONAL,
            'Send requests via specified proxy address. Can be specified as TELEPATH_PROXY in your .env file.');
    }

    protected function interactBotOptions(InputInterface $input, OutputInterface $output)
    {
        if (! $input->getOption('token') && ! isset($_ENV['TELEGRAM_API_TOKEN'])) {
            $input->setOption('token', $this->ask($input, $output, "Bot API Token: "));
        }
    }

    protected function makeBot(InputInterface $input, OutputInterface $output): Bot
    {
        $token = $input->getOption('token') ?? $_ENV['TELEGRAM_API_TOKEN'] ?? null;
        if (! $token) {
            $output->writeln('<error>The Bot API Token is necessary to send your request. Please specify your bot token with --token {your token}</error>');
            exit(Command::FAILURE);
        }

        $apiUrl = $input->getOption('api-url') ?? $_ENV['TELEGRAM_API_URL'] ?? null;
        if (! $apiUrl) {
            $apiUrl = Bot::DEFAULT_API_SERVER_URL;
        }

        if (! str_starts_with($apiUrl, 'http')) {
            $apiUrl = 'https://' . $apiUrl;
        }

        $proxy = $input->getOption('proxy') ?? $_ENV['TELEPATH_PROXY'] ?? null;

        return BotBuilder::token($token)
            ->baseUri($apiUrl)
            ->httpProxy($proxy)
            ->build();
    }

    protected function ask(InputInterface $input, OutputInterface $output, string $question, string $default = null): string
    {
        /** @var QuestionHelper $helper */
        $helper = $this->getHelper('question');

        $question = new Question($question, $default);
        $question->setValidator(function ($answer) {
            if ($answer === null) {
                throw new \RuntimeException('This argument is mandatory');
            }

            return $answer;
        });

        return $helper->ask($input, $output, $question);
    }

}