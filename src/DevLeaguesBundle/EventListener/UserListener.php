<?php

namespace DevLeaguesBundle\EventListener;

use Symfony\Component\EventDispatcher\Event;

/**
 * Event listener of User entity
 */
class UserListener
{
	public function onAddFriendAction(Event $event)
	{

	}

	public function onRemoveFriendAction(Event $event )
	{
		# code...
	}

	public function onLvlUpAction(Event $event)
	{
		# code...
	}
}
