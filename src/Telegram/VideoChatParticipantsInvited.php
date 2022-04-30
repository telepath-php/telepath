<?php

/**
 * This file is auto-generated.
 */

namespace Tii\Telepath\Telegram;

/**
 * This object represents a service message about new members invited to a video chat.
 */
class VideoChatParticipantsInvited extends \Tii\Telepath\Type
{
	/**
	 * New members that were invited to the video chat
	 * @var User[]
	 */
	public array $users;


	/**
	 * @param User[] $users New members that were invited to the video chat
	 */
	public static function make(array $users): static
	{
		return new static([
		    'users' => $users,
		]);
	}
}
