<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents the content of a service message, sent whenever a user in the chat triggers a proximity alert set by another user.
 */
class ProximityAlertTriggered extends \Tii\Telepath\Types\Type
{
    /** User that triggered the alert */
    public User $traveler;

    /** User that set the alert */
    public User $watcher;

    /** The distance between the users */
    public int $distance;

    /**
     * @param User $traveler User that triggered the alert
     * @param User $watcher User that set the alert
     * @param int $distance The distance between the users
     */
    public static function make(User $traveler, User $watcher, int $distance): static
    {
        return new static([
            'traveler' => $traveler,
            'watcher' => $watcher,
            'distance' => $distance,
        ]);
    }
}
