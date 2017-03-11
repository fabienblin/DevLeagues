<?php

namespace DevLeaguesBundle\Entity\League;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use DevLeaguesBundle\Entity\User\User;
use DevLeaguesBundle\Entity\Technology\Technology;
use DevLeaguesBundle\Entity\Challenge\Challenge;
use DevLeaguesBundle\Entity\Reward\Reward;

/**
 * League
 *
 * @ORM\Table(name="league")
 * @ORM\Entity(repositoryClass="DevLeaguesBundle\Repository\LeagueRepository")
 */
class League
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer", nullable=true)
     */
    private $level;

    /**
     * @var int
     *
     * @ORM\Column(name="notoriety", type="integer", nullable=true)
     */
    private $notoriety;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation", type="datetime")
     */
    private $creation;

	/**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="DevLeaguesBundle\Entity\Technology\Technology", inversedBy="leagues")
     */
    private $technologies;

    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="DevLeaguesBundle\Entity\User\User", inversedBy="leagues")
     */
    private $users;

	/**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="DevLeaguesBundle\Entity\Challenge\Challenge", mappedBy="leagues")
     */
    private $challenges;


	/**
	 * @var ArrayCollection
	 *
	 * @ORM\ManyToMany(targetEntity="DevLeaguesBundle\Entity\Reward\Reward", inversedBy="leagues")
	 */
	private $rewards;

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
     * Set name
     *
     * @param string $name
     *
     * @return League
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return League
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
     * Set notoriety
     *
     * @param integer $notoriety
     *
     * @return League
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
     * Set creation
     *
     * @param \DateTime $creation
     *
     * @return League
     */
    public function setCreation($creation)
    {
        $this->creation = $creation;

        return $this;
    }

    /**
     * Get creation
     *
     * @return \DateTime
     */
    public function getCreation()
    {
        return $this->creation;
    }

	/**
     * Set technologies
     *
     * @param ArrayCollection $technologies
     *
     * @return League
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
     * @return League
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
     * Set users
     *
     * @param ArrayCollection $users
     *
     * @return League
     */
    public function setUsers($users)
    {
        $this->users = $users;

        return $this;
    }

	/**
	* Get users
	*
	* @return ArrayCollection
	*/
	public function getUsers()
	{
		return $this->users;
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
