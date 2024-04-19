<?php

use Telepath\Telegram\User;

it('gets information about the bot', function () {
    $response = $this->bot->getMe();

    expect($response)->toBeInstanceOf(User::class)
        ->and($response->is_bot)->toBeTrue();
});

it('receives messages', function () {
    $response = $this->client->get('sendMessage');
    expect($response->getStatusCode())->toBe(200);

    $update = $this->nextUpdate();
    expect($update->message->text)->toBe('Hello, world!');
});
