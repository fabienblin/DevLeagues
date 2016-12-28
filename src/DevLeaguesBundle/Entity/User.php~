<?php

namespace DevLeaguesBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
* User
*
* @ORM\Entity
* @ORM\Table(name="fos_user")
*/
class User extends BaseUser
{
	/**
	 * Titles users gain through notoriety in a league (default = ronin)
	 */
	const TITLE_SHIFU = 'SHIFU';
	const TITLE_DUKE = 'DUKE';
	const TITLE_LIEUTENANT = 'LIEUTENANT';
	const TITLE_DISCIPLE = 'DISCIPLE';
	const TITLE_RONIN = 'RONIN';

	/**
	* @var integer
	*
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;

	/**
	* @var integer
	*
	* @ORM\Column(name="experience", type="integer")
	*/
	private $experience;

	/**
	* @var string
	*
	* @ORM\Column(name="avatar", type="string")
	*/
	private $avatar;

	/**
	* @var integer
	*
	* @ORM\Column(name="notoriety", type="integer")
	*/
	private $notoriety;

	/**
	* @ORM\ManyToMany(targetEntity="League", inversedBy="users")
	* @ORM\JoinTable(name="user_league")
	*/
	private $leagues;

	/**
	* @ORM\ManyToMany(targetEntity="Technology", inversedBy="users")
	* @ORM\JoinTable(name="user_technology")
	*/
	private $technologies;

	/**
	* @ORM\ManyToMany(targetEntity="Event", inversedBy="users")
	* @ORM\JoinTable(name="user_event")
	*/
	private $events;

	/**
     * @ORM\OneToMany(targetEntity="Friend", mappedBy="friendId")
     */
	private $friends;


	/**
	* Get id
	*
	* @return integer
	*/
	public function getId()
	{
		return $this->id;
	}

	/**
	* User constructor.
	*/
	public function __construct()
	{
		parent::__construct();
		$this->avatar = 'anonymous.png';
		$this->experience = 0;
		$this->notoriety = 0;
		$this->friends = new ArrayCollection();
	}

	/**
	* Add league
	*
	* @param \DevLeaguesBundle\Entity\League $league
	*
	* @return User
	*/
	public function addLeague(\DevLeaguesBundle\Entity\League $league)
	{
		$this->leagues[] = $league;

		return $this;
	}

	/**
	* Remove league
	*
	* @param \DevLeaguesBundle\Entity\League $league
	*/
	public function removeLeague(\DevLeaguesBundle\Entity\League $league)
	{
		$this->leagues->removeElement($league);
	}

	/**
	* Get leagues
	*
	* @return \Doctrine\Common\Collections\Collection
	*/
	public function getLeagues()
	{
		return $this->leagues;
	}

	/**
	* Add technology
	*
	* @param \DevLeaguesBundle\Entity\Technology $technology
	*
	* @return User
	*/
	public function addTechnology(\DevLeaguesBundle\Entity\Technology $technology)
	{
		$this->technologies[] = $technology;

		return $this;
	}

	/**
	* Remove technology
	*
	* @param \DevLeaguesBundle\Entity\Technology $technology
	*/
	public function removeTechnology(\DevLeaguesBundle\Entity\Technology $technology)
	{
		$this->technologies->removeElement($technology);
	}

	/**
	* Get technologies
	*
	* @return \Doctrine\Common\Collections\Collection
	*/
	public function getTechnologies()
	{
		return $this->technologies;
	}

	/**
	* Add event
	*
	* @param \DevLeaguesBundle\Entity\Event $event
	*
	* @return User
	*/
	public function addEvent(\DevLeaguesBundle\Entity\Event $event)
	{
		$this->events[] = $event;

		return $this;
	}

	/**
	* Remove event
	*
	* @param \DevLeaguesBundle\Entity\Event $event
	*/
	public function removeEvent(\DevLeaguesBundle\Entity\Event $event)
	{
		$this->events->removeElement($event);
	}

	/**
	* Get events
	*
	* @return \Doctrine\Common\Collections\Collection
	*/
	public function getEvents()
	{
		return $this->events;
	}

	/**
	* Set experience
	*
	* @param integer $experience
	*
	* @return User
	*/
	public function setExperience($experience)
	{
		$this->experience = $experience;

		return $this;
	}

	/**
	* Get experience
	*
	* @return integer
	*/
	public function getExperience()
	{
		return $this->experience;
	}

	/**
	* Set notoriety
	*
	* @param integer $notoriety
	*
	* @return User
	*/
	public function setNotoriety($notoriety)
	{
		$this->notoriety = $notoriety;

		return $this;
	}

	/**
	* Get notoriety
	*
	* @return integer
	*/
	public function getNotoriety()
	{
		return $this->notoriety;
	}

    /**
     * Set avatar
     *
     * @param \varchar $avatar
     *
     * @return User
     */
    public function setAvatar(\varchar $avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return \varchar
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Add friend
     *
     * @param \DevLeaguesBundle\Entity\User $friend
     *
     * @return User
     */
    public function addFriend(\DevLeaguesBundle\Entity\User $friend)
    {
        $this->friends[] = $friend;

        return $this;
    }

    /**
     * Remove friend
     *
     * @param \DevLeaguesBundle\Entity\User $friend
     */
    public function removeFriend(\DevLeaguesBundle\Entity\User $friend)
    {
        $this->friends->removeElement($friend);
    }

    /**
     * Get friends
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFriends()
    {
        return $this->friends;
    }

    /**
     * Add friendsWithMe
     *
     * @param \DevLeaguesBundle\Entity\User $friendsWithMe
     *
     * @return User
     */
    public function addFriendsWithMe(\DevLeaguesBundle\Entity\User $friendsWithMe)
    {
        $this->friendsWithMe[] = $friendsWithMe;

        return $this;
    }

    /**
     * Remove friendsWithMe
     *
     * @param \DevLeaguesBundle\Entity\User $friendsWithMe
     */
    public function removeFriendsWithMe(\DevLeaguesBundle\Entity\User $friendsWithMe)
    {
        $this->friendsWithMe->removeElement($friendsWithMe);
    }

    /**
     * Get friendsWithMe
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFriendsWithMe()
    {
        return $this->friendsWithMe;
    }
}
