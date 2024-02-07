<?php

use Telepath\Telegram\Update;
use Telepath\Telegram\User;

it('gets information about the bot', function () {
    $response = $this->bot->getMe();

    expect($response)->toBeInstanceOf(User::class)
        ->and($response->is_bot)->toBeTrue();
});

it('gets updates from Telegram API', function () {
    // Could be stop working at any time...
    $updates = $this->bot->getUpdates(offset: -205786304, limit: 1);

    expect($updates)->toBeArray()->toHaveCount(1)
        ->and($updates[0])->toBeInstanceOf(Update::class)
        ->and($updates[0]->message->text)->toBe('Test');
});
