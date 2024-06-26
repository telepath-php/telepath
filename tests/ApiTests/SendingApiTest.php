<?php

use Telepath\Bot;
use Telepath\Files\InputFile;
use Telepath\Support\ParseMode\MarkdownV2;
use Telepath\Support\ParseMode\ParseMode;
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
        photo: InputFile::fromFile(__DIR__.'/../files/send/testphoto.jpeg'),
        caption: 'Hello, image!'
    );

    expect($message)->toBeInstanceOf(Message::class)
        ->and($message->from)->toBeInstanceOf(User::class)
        ->and($message->photo)->toBeArray()->toContainOnlyInstancesOf(PhotoSize::class)
        ->and($message->caption)->toBe('Hello, image!');
});

it('sends and escapes MarkdownV2', function () {
    $text = MarkdownV2::escape('*bold _italic bold ~italic bold strikethrough ||italic bold strikethrough spoiler||~ __underline italic bold___ bold*');

    expect($text)->toBe('\*bold \_italic bold \~italic bold strikethrough \|\|italic bold strikethrough spoiler\|\|\~ \_\_underline italic bold\_\_\_ bold\*');

    $result = $this->bot->sendMessage(
        chat_id: $_SERVER['TELEGRAM_USER'],
        text: "*{$text}*",
        parse_mode: ParseMode::MarkdownV2,
    );

    expect($result)->toBeInstanceOf(Message::class);
});

it('sends a chat action', function () {
    $result = $this->bot->sendChatAction(
        chat_id: $_SERVER['TELEGRAM_USER'],
        action: \Telepath\Types\Enums\ChatActionType::Typing,
    );

    expect($result)->toBeTrue();
});
