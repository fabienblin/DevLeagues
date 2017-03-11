<?php

namespace DevLeaguesBundle\Entity\Challenge;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use DevLeaguesBundle\Entity\User\User;
use DevLeaguesBundle\Entity\Technology\Technology;
use DevLeaguesBundle\Entity\League\League;
use DevLeaguesBundle\Entity\Reward\Reward;

/**
 * Challenge
 *
 * @ORM\Table(name="challenge")
 * @ORM\Entity(repositoryClass="DevLeaguesBundle\Repository\ChallengeRepository")
 */
class Challenge
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
     * @var \DateTime
     *
     * @ORM\Column(name="begin", type="datetime")
     */
    private $begin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end", type="datetime")
     */
    private $end;

	/**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

	/**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="DevLeaguesBundle\Entity\Technology\Technology", inversedBy="challenges")
     */
    private $technologies;

    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="DevLeaguesBundle\Entity\User\User", mappedBy="challenges")
     */
    private $users;

	/**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="DevLeaguesBundle\Entity\Reward\Reward", inversedBy="challenges")
     */
    private $rewards;

	/**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="DevLeaguesBundle\Entity\League\League", inversedBy="challenges")
     */
    private $leagues;

	public function __construct()
	{
			$this->begin		= new \DateTime();
			$this->end			= new \DateTime();
			$this->technologies	= new ArrayCollection();
			$this->users		= new ArrayCollection();
			$this->leagues		= new ArrayCollection();
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
     * Set name
     *
     * @param string $name
     *
     * @return Challenge
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
     * Set begin
     *
     * @param \DateTime $begin
     *
     * @return Challenge
     */
    public function setBegin($begin)
    {
        $this->begin = $begin;

        return $this;
    }

    /**
     * Get begin
     *
     * @return \DateTime
     */
    public function getBegin()
    {
        return $this->begin;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     *
     * @return Challenge
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

	/**
     * Set end
     *
     * @param string $description
     *
     * @return Challenge
     */
    public function setdescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get end
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
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
     * Set users
     *
     * @param ArrayCollection $users
     *
     * @return Challenge
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
     * Set rewards
     *
     * @param ArrayCollection $users
     *
     * @return Challenge
     */
    public function setRewards($rewards)
    {
        $this->rewards = $rewards;

        return $this;
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
