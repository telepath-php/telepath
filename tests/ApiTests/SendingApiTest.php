<?php

use Telepath\Bot;
use Telepath\Files\InputFile;
use Telepath\Telegram\Chat;
use Telepath\Telegram\Message;
use Telepath\Telegram\PhotoSize;
use Telepath\Telegram\User;

beforeEach(function () {
    $this->bot = new Bot($_SERVER['TELEGRAM_API_TOKEN']);
});

it('sends text messages', function () {
    $message = $this->bot->sendMessage(
        chat_id: $_SERVER['TELEGRAM_USER'],
        text: 'Hello, world!'
    );

    expect($message)->toBeInstanceOf(Message::class)
        ->and($message->chat)->toBeInstanceOf(Chat::class)
        ->and($message->from)->toBeInstanceOf(User::class)
        ->and($message->text)->toBe('Hello, world!');
});

it('sends a photo', function () {
    $message = $this->bot->sendPhoto(
        chat_id: $_SERVER['TELEGRAM_USER'],
        photo: InputFile::fromFile(__DIR__.'/../files/testphoto.jpeg'),
        caption: 'Hello, image!'
    );

    expect($message)->toBeInstanceOf(Message::class)
        ->and($message->chat)->toBeInstanceOf(Chat::class)
        ->and($message->from)->toBeInstanceOf(User::class)
        ->and($message->photo)->toContainOnlyInstancesOf(PhotoSize::class)
        ->and($message->caption)->toBe('Hello, image!');
});
