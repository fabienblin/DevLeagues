<?php
namespace DevLeaguesBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use DevLeaguesBundle\Entity\User;

/**
 * Event called to add a user as a friend by the current session user
 */
class AddFriendEvent extends Event
{
	/**
	 * Event name
	 */
    const NAME = 'user.add_friend';

	/**
	 * @var User
	 */
    protected $friend;

	/**
	 * @param User $friend
	 */
    public function __construct(User $friend)
    {
        $this->friend = $friend;
    }

	/**
	 * @return User
	 */
    public function getFriend()
    {
        return $this->friend;
    }
}
