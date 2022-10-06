<?php

namespace Telepath\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\QuestionHelper;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;
use Telepath\TelegramBot;
use function Termwind\style;

abstract class BotCommand extends Command
{
    protected InputInterface $input;

    protected OutputInterface $output;

    public function __construct(string $name = null)
    {
        parent::__construct($name);

        style('box')->apply('px-2 py-1');

        style('success')->apply('box bg-lime-400 text-black');
        style('error')->apply('box bg-red-400 text-white');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->input = $input;
        $this->output = $output;
    }


    protected function configureBotArguments()
    {
        $this->addOption('bot-token', 't', InputOption::VALUE_REQUIRED, 'Telegram Bot API Token');
        $defaultApiUrl = TelegramBot::DEFAULT_API_SERVER_URL;
        $this->addOption('bot-api-url', null, InputOption::VALUE_OPTIONAL, "Telegram Bot API Server to use (Default: {$defaultApiUrl})");
        $this->addOption('proxy', null, InputOption::VALUE_OPTIONAL, 'Send request via specified proxy address');
    }

    protected function makeBot(InputInterface $input, OutputInterface $output): TelegramBot
    {
        $token = $input->getOption('bot-token');
        if ($token === null) {
            throw new \RuntimeException('The Bot API Token is necessary to send your request. Please specify your bot token with --token {your token}');
        }

        $apiUrl = $input->getOption('bot-api-url');
        if ($apiUrl === null) {
            $apiUrl = TelegramBot::DEFAULT_API_SERVER_URL;
        }

        if (! str_starts_with($apiUrl, 'http')) {
            $apiUrl = 'https://' . $apiUrl;
        }

        $proxy = $input->getOption('proxy');

        $bot = new TelegramBot($token, $apiUrl);
        if ($proxy !== null) {
            $bot->enableProxy($proxy);
        }
        return $bot;
    }

    protected function ask(string $question, string $default = null): string
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

        return $helper->ask($this->input, $this->output, $question);
    }

}