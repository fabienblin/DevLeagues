<?php

namespace DevLeaguesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use DevLeaguesBundle\Entity\User;
use DevLeaguesBundle\Entity\Reward;
use DevLeaguesBundle\Entity\Technology;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\Collection;

/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="DevLeaguesBundle\Repository\EventRepository")
 */
class Event
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
     * @var \DateTime $creationTimestamp
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
	private $creationTimestamp;

	/**
     * @var \DateTime $endTimestamp
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
	private $endTimestamp;

	/**
	 * @var ArrayCollection $technologies
	 *
	 * @ORM\ManyToMany(targetEntity="Technology", inversedBy="events")
	 * @ORM\JoinTable(name="event_technology")
	 */
	private $technologies;

	/**
	 * @var ArrayCollection $users
	 *
     * @ORM\ManyToMany(targetEntity="User", mappedBy="events")
     */
    private $users;

	/**
	 * @var ArrayCollection $rewards
	 *
	 * @ORM\ManyToMany(targetEntity="Reward", inversedBy="events")
	 * @ORM\JoinTable(name="event_reward")
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
     * @return Event
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
     * Constructor
     */
    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->rewards = new ArrayCollection();
		$this->creationTimestamp = new \DateTime();
    }

    /**
     * Add user
     *
     * @param User $user
     *
     * @return Event
     */
    public function addUser(User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param User $user
     */
    public function removeUser(User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return Collection
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Add reward
     *
     * @param Reward $reward
     *
     * @return Event
     */
    public function addReward(Reward $reward)
    {
        $this->rewards[] = $reward;

        return $this;
    }

    /**
     * Remove reward
     *
     * @param Reward $reward
     */
    public function removeReward(Reward $reward)
    {
        $this->rewards->removeElement($reward);
    }

    /**
     * Get rewards
     *
     * @return Collection
     */
    public function getRewards()
    {
        return $this->rewards;
    }

    /**
     * Set creationTimestamp
     *
     * @param \DateTime $creationTimestamp
     *
     * @return Event
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
     * @return Event
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
     * Add technology
     *
     * @param Technology $technology
     *
     * @return Event
     */
    public function addTechnology(Technology $technology)
    {
        $this->technologies[] = $technology;

        return $this;
    }

    /**
     * Remove technology
     *
     * @param Technology $technology
     */
    public function removeTechnology(Technology $technology)
    {
        $this->technologies->removeElement($technology);
    }

    /**
     * Get technologies
     *
     * @return Collection
     */
    public function getTechnologies()
    {
        return $this->technologies;
    }
}
