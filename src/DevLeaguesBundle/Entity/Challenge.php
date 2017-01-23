<?php

namespace DevLeaguesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use DevLeaguesBundle\Entity\User;

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
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_timestamp", type="datetime")
     */
    private $creationTimestamp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_timestamp", type="datetime")
     */
    private $endTimestamp;

    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Technology", inversedBy="challenges")
     */
    private $technologies;

    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="User", inversedBy="challenges")
     */
    private $users;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Reward", mappedBy="challenges")
     */
    private $rewards;

	public function __construct()
	{
		$this->creationTimestamp= new \DateTime();
		$this->technologies		= new ArrayCollection();
		$this->users			= new ArrayCollection();
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
     * Set description
     *
     * @param string $description
     *
     * @return Challenge
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set creationTimestamp
     *
     * @param \DateTime $creationTimestamp
     *
     * @return Challenge
     */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;

        return $this;
    }

    /**
     * Get creationTimestamp
     *
     * @return \DateTime
     */
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }

    /**
     * Set endTimestamp
     *
     * @param \DateTime $endTimestamp
     *
     * @return Challenge
     */
    public function setEndTimestamp($endTimestamp)
    {
        $this->endTimestamp = $endTimestamp;

        return $this;
    }

    /**
     * Get endTimestamp
     *
     * @return \DateTime
     */
    public function getEndTimestamp()
    {
        return $this->endTimestamp;
    }

    /**
     * Set technology
     *
     * @param ArrayCollection $technology
     *
     * @return Challenge
     */
    public function setTechnology($technology)
    {
        $this->technology = $technology;

        return $this;
    }

    /**
     * Get technology
     *
     * @return ArrayCollection
     */
    public function getTechnology()
    {
        return $this->technology;
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
     * Add user
     *
	 * @param User $user
	 *
     * @return Challenge
     */
    public function addUser(User $user)
    {
		if (!$this->getUsers()->contains($user)) {
			$this->getUsers()->add($user);
		}

        return $this;
    }

	/**
     * Remove user
     *
	 * @param User $user
	 *
     * @return Challenge
     */
    public function removeUser(User $user)
    {
		if ($this->getUsers()->contains($user)) {
			$this->getUsers()->removeElement($user);
		}

        return $this;
    }

    /**
     * Set rewards
     *
     * @param ArrayCollection $rewards
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
}
