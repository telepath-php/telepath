<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents the content of a service message, sent whenever a user in the chat triggers a proximity alert set by another user.
 */
class ProximityAlertTriggered extends \Tii\Telepath\Type
{
	/** User that triggered the alert */
	public User $traveler;

	/** User that set the alert */
	public User $watcher;

	/** The distance between the users */
	public int $distance;
}
