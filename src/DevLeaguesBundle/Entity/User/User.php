<?php

namespace DevLeaguesBundle\Entity\User;

use FOS\UserBundle\Model\User as BaseUser;
use Avanzu\AdminThemeBundle\Model\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use DevLeaguesBundle\Entity\Technology\Technology;
use DevLeaguesBundle\Entity\User\UserTechnology;
use DevLeaguesBundle\Entity\Challenge\Challenge;
use DevLeaguesBundle\Entity\League\League;
use DevLeaguesBundle\Entity\Reward\Reward;

/**
 * User
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="DevLeaguesBundle\Repository\UserRepository")
 */
class User extends BaseUser implements UserInterface
{
	/**
	 * Titles users gain through notoriety in a league (default = TITLE_RONIN)
	 */
	const TITLE_SHIFU = 'SHIFU';
	const TITLE_DUKE = 'DUKE';
	const TITLE_LIEUTENANT = 'LIEUTENANT';
	const TITLE_DISCIPLE = 'DISCIPLE';
	const TITLE_RONIN = 'RONIN';

	/**
	 * Roles users are granted at registration (default = ROLE_USER)
	 */
	const ROLE_USER = 'ROLE_USER';
	const ROLE_ADMIN = 'ROLE_ADMIN';
	const ROLE_DEVELOPER = 'ROLE_DEVELOPER';
	const ROLE_COMPANY = 'ROLE_COMPANY';

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255, nullable=true)
     */
    private $lastName;

    /**
     * @var int
     *
     * @ORM\Column(name="notoriety", type="integer", nullable=true)
     */
    private $notoriety;

    /**
     * @var int
     *
     * @ORM\Column(name="gold", type="integer", nullable=true)
     */
    private $gold;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer", nullable=true)
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=255, nullable=true)
     */
    private $avatar;

	/**
     * @var \DateTime
     *
     * @ORM\Column(name="member_since", type="datetime")
     */
    private $memberSince;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="title", type="string", length=255, nullable=true)
 	*/
	private $title;

	/**
	 * @var ArrayCollection
	 *
	 * @ORM\OneToMany(targetEntity="DevLeaguesBundle\Entity\User\UserTechnology", mappedBy="user", cascade={"persist", "remove"})
	 */
	private $userTechnologies;

	/**
	 * @var ArrayCollection
	 *
	 * @ORM\ManyToMany(targetEntity="DevLeaguesBundle\Entity\Challenge\Challenge", inversedBy="users")
	 */
	private $challenges;

	/**
	 * @var ArrayCollection
	 *
	 * @ORM\ManyToMany(targetEntity="DevLeaguesBundle\Entity\Reward\Reward", inversedBy="users")
	 */
	private $rewards;

	/**
	 * @var ArrayCollection
	 *
	 * @ORM\ManyToMany(targetEntity="DevLeaguesBundle\Entity\League\League", mappedBy="users")
	 */
	private $leagues;

	function __construct($username = '',
        $firstName = '',
        $lastName = '',
        $avatar = '',
        $memberSince = null,
        $isOnline = false,
        $title = self::TITLE_RONIN)
    {
		parent::__construct();
		$this->username         = $username;
		$this->firstName        = $firstName;
		$this->lastName         = $lastName;
		$this->avatar           = $avatar;
		$this->memberSince      = $memberSince ? $memberSince : new \DateTime();
		$this->isOnline         = $isOnline;
		$this->title            = $title;
		$this->leagues          = new ArrayCollection();
		$this->userTechnologies	= new ArrayCollection();
		$this->challenges       = new ArrayCollection();
		$this->leagues			= new ArrayCollection();
    }

	/**
	 * @param \DevLeaguesBundle\Entity\User\UserTechnology $userTechnology
	 *
	 * @return UserTechnology
	 */
	public function addUserTechnology($userTechnology)
	{
		$this->userTechnologies->add($userTechnology);

		return $this;
	}

	/**
	 * @param \DevLeaguesBundle\Entity\User\UserTechnology $userTechnology
	 *
	 * @return UserTechnology
	 */
	public function removeUserTechnology($userTechnology)
	{
		$this->userTechnologies->removeElement($userTechnology);

		return $this;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		/*
			if (!$this->name || ($this->name = $this->firstName.' '.$this->lastName) == ' '){
					$this->name = $this->username;
			}
			return $this->name;
		*/
			return $this->username;
	}

	/**
     * @return bool
     */
    public function isOnline()
    {
        return $this->getIsOnline();
    }

    public function getIdentifier() {
        return str_replace(' ', '-', $this->getUsername());
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
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
     * @return int
     */
    public function getNotoriety()
    {
        return $this->notoriety;
    }

    /**
     * Set gold
     *
     * @param integer $gold
     *
     * @return User
     */
    public function setGold($gold)
    {
        $this->gold = $gold;

        return $this;
    }

    /**
     * Get gold
     *
     * @return int
     */
    public function getGold()
    {
        return $this->gold;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return User
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     *
     * @return User
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

	/**
     * Set memberSince
     *
     * @param \DateTime $memberSince
     *
     * @return User
     */
    public function setMemberSince($memberSince)
    {
        $this->memberSince = $memberSince;

        return $this;
    }

    /**
     * Get memberSince
     *
     * @return \DateTime
     */
    public function getMemberSince()
    {
        return $this->memberSince;
    }

	/**
     * Set title
     *
     * @param string $title
     *
     * @return User
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

	/**
     * Set UserTechnologies
     *
     * @param ArrayCollection $technologies
     *
     * @return User
     */
    public function setUserTechnologies($userTechnologies)
    {
        $this->userTechnologies = $userTechnologies;

        return $this;
    }

    /**
     * Get UserTechnologies
     *
     * @return ArrayCollection
     */
    public function getUserTechnologies()
    {
        return $this->userTechnologies;
    }

	/**
     * Set challenges
     *
     * @param ArrayCollection $challenges
     *
     * @return User
     */
    public function setChallenges($challenges)
    {
        $this->challenges = $challenges;

        return $this;
    }

	/**
	* Get challenges
	*
	* @return ArrayCollection
	*/
	public function getChallenges()
	{
		return $this->challenges;
	}

	/**
     * Get rewards
     *
     * @return ArrayCollection
     */
    public function getRewards()
    {
        return $this->rewards;
    }

	/**
     * Set rewards
     *
     * @param ArrayCollection $rewards
     *
     * @return User
     */
    public function setRewards($rewards)
    {
        $this->rewards = $rewards;

        return $this;
    }

	/**
     * Get leagues
     *
     * @return ArrayCollection
     */
    public function getLeagues()
    {
        return $this->leagues;
    }

	/**
     * Set rewards
     *
     * @param ArrayCollection $rewards
     *
     * @return User
     */
    public function setLeagues($leagues)
    {
        $this->leagues = $leagues;

        return $this;
    }
}
