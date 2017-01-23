<?php

namespace DevLeaguesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Avanzu\AdminThemeBundle\Model\UserInterface;
use DevLeaguesBundle\Entity\Challenge;

/**
 * User
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="DevLeaguesBundle\Repository\UserRepository")
 */
class User extends BaseUser implements UserInterface
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
     * @ORM\Column(name="first_name", type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255, nullable=true)
     */
    private $lastName;

    /**
     * @var int
     *
     * @ORM\Column(name="experience", type="integer", nullable=true)
     */
    private $experience;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=255, nullable=true)
     */
    private $avatar;

    /**
     * @var int
     *
     * @ORM\Column(name="notoriety", type="integer", nullable=true)
     */
    private $notoriety;

    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="League", mappedBy="users")
     */
    private $leagues;

    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Technology", mappedBy="users")
     */
    private $technologies;

    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Challenge", mappedBy="users")
     */
    private $challenges;

	/**
	 * Ne pas utiliser cette variable (à priori)
     * @var ArrayCollection
     *
     * @ORM\ManyToOne(targetEntity="Friend", inversedBy="userA")
     */
    private $friendsWithMe;

	/**
	 * @var ArrayCollection
	 *
	 * @ORM\OneToMany(targetEntity="Friend", mappedBy="userB")
	 */
	private $friends;

	/**
     * @var string
	 *
	 * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

	/**
	 * @var string
	 */
	private $name;

    /**
     * @var \DateTime
	 *
	 * @ORM\Column(name="member_since", type="datetime")
     */
    private $memberSince;

    /**
     * @var bool
     */
    private $isOnline;

    function __construct($username = '',
	$firstName = '',
	$lastName = '',
	$avatar = '',
	$memberSince = null,
	$isOnline = false,
	$title = self::TITLE_RONIN)
    {
		$this->username		= $username;
		$this->firstName	= $firstName;
		$this->lastName		= $lastName;
        $this->avatar		= $avatar;
		$this->memberSince	= $memberSince ?:new \DateTime();
        $this->isOnline		= $isOnline;
        $this->title		= $title;
		$this->leagues		= new ArrayCollection();
		$this->technologies	= new ArrayCollection();
		$this->challenges	= new ArrayCollection();
		$this->friendsWithMe= new ArrayCollection();
		$this->friends		= new ArrayCollection();
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
     * @return int
     */
    public function getExperience()
    {
        return $this->experience;
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
     * Set leagues
     *
     * @param ArrayCollection $leagues
     *
     * @return User
     */
    public function setLeagues($leagues)
    {
        $this->leagues = $leagues;

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
     * Set technologies
     *
     * @param ArrayCollection $technologies
     *
     * @return User
     */
    public function setTechnologies($technologies)
    {
        $this->technologies = $technologies;

        return $this;
    }

    /**
     * Get technologies
     *
     * @return ArrayCollection
     */
    public function getTechnologies()
    {
        return $this->technologies;
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
     * Add challenge
     *
	 * @param Challenge $challenge
	 *
     * @return User
     */
    public function addChallenge(Challenge $challenge)
    {
		if (!$this->getChallenges()->contains($challenge)) {
			$this->getChallenges()->add($challenge);
		}

        return $this;
    }

	/**
     * Remove challenge
     *
	 * @param Challenge $challenge
	 *
     * @return User
     */
    public function removeChallenge(Challenge $challenge)
    {
		if ($this->getChallenges()->contains($challenge)) {
			$this->getChallenges()->removeElement($challenge);
		}

        return $this;
    }

    /**
     * Set friends
     *
     * @param ArrayCollection $friends
     *
     * @return User
     */
    public function setFriends($friends)
    {
        $this->friends = $friends;

        return $this;
    }

    /**
     * Get friends
     *
     * @return ArrayCollection
     */
    public function getFriends()
    {
        return $this->friends;
    }

	/**
     * Add friend
     *
	 * @param User $friend
	 *
     * @return User
     */
    public function addFriend(User $friend)
    {
		if (!$this->getFriends()->contains($friend)) {
			$this->getFriends()->add($friend);
		}

        return $this;
    }

	/**
     * Remove friend
     *
	 * @param User $friend
	 *
     * @return User
     */
    public function removeFriend(User $friend)
    {
		if ($this->getFriends()->contains($friend)) {
			$this->getFriends()->removeElement($friend);
		}

        return $this;
    }

	/**
	 * @return string
	 */
	public function getName()
	{
		if (!$this->name && ($this->name = $this->firstName.' '.$this->lastName) == ' '){
			$this->name = $this->username;
		}
		return $this->name;
	}

	/**
     * @param \DateTime $memberSince
     *
     * @return $this
     */
    public function setMemberSince(\DateTime $memberSince)
    {
        $this->memberSince = $memberSince;
        return $this;
    }

	/**
	 * @return \DateTime
	 */
	public function getMemberSince()
	{
		return $this->memberSince;
	}

	/**
     * @param string $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

	/**
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * @param boolean $isOnline
	 *
	 * @return $this
	 */
	public function setIsOnline($isOnline)
	{
		$this->isOnline = $isOnline;
		return $this;
	}

	/**
	 * @return boolean
	 */
	public function getIsOnline()
	{
		return $this->isOnline;
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
}
