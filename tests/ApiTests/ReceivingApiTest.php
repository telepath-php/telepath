<?php

use Telepath\Telegram\Message;
use Telepath\Telegram\PhotoSize;
use Telepath\Telegram\Update;
use Telepath\Telegram\User;
use Tests\ApiTestCase;

uses(ApiTestCase::class);

it('gets information about the bot', function () {
    $response = $this->bot->getMe();

    expect($response)->toBeInstanceOf(User::class)
        ->and($response->is_bot)->toBeTrue();
});

it('receives text messages', function () {
    $response = $this->client->get('sendMessage');
    expect($response->getStatusCode())->toBe(200);

    $update = $this->nextUpdate();
    expect($update)->toBeInstanceOf(Update::class)
        ->and($update->message)->toBeInstanceOf(Message::class)
        ->and($update->message->text)->toBe('Hello, world!');
});

it('receives edited messages', function () {
    $response = $this->client->get('editMessage');
    expect($response->getStatusCode())->toBe(200);

    $update = $this->nextUpdate();
    expect($update)->toBeInstanceOf(Update::class)
        ->and($update->message)->toBeInstanceOf(Message::class);

    $update = $this->nextUpdate();
    expect($update)->toBeInstanceOf(Update::class)
        ->and($update->edited_message)->toBeInstanceOf(Message::class)
        ->and($update->edited_message->text)->toBe('Goodbye, world!');
});

it('receives photos', function () {
    $response = $this->client->get('sendPhoto');
    expect($response->getStatusCode())->toBe(200);

    $update = $this->nextUpdate();
    expect($update)->toBeInstanceOf(Update::class)
        ->and($update->message)->toBeInstanceOf(Message::class)
        ->and($update->message->photo)->toContainOnlyInstancesOf(PhotoSize::class)
        ->and($update->message->caption)->toBe('Hello, photo!');
});
