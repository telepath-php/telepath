<?php
/**
 * This file was automatically generated!
 */


namespace Tii\Telepath\Telegram;

class ProximityAlertTriggered extends \Tii\Telepath\Type
{
    public User $traveler;

    public User $watcher;

    public int $distance;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}

