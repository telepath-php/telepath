<?php

use Telepath\Bot;
use Telepath\Telegram\Message;

beforeEach(function () {
    $this->bot = new Bot($_SERVER['TELEGRAM_API_TOKEN']);
});

it('sends text messages', function () {
    $message = $this->bot->sendMessage(
        chat_id: $_SERVER['TELEGRAM_USER'],
        text: 'Hello, world!'
    );

    expect($message)->toBeInstanceOf(Message::class)
        ->and($message->message_id)->not->toBeNull('message_id is null')
        ->and($message->text)->toBe('Hello, world!');
});
