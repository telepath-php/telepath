<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * Represents a location to which a chat is connected.
 */
class ChatLocation extends \Tii\Telepath\Type
{
	/** The location to which the supergroup is connected. Can't be a live location. */
	public Location $location;

	/** Location address; 1-64 characters, as defined by the chat owner */
	public string $address;
}
