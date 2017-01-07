<?php

namespace DevLeaguesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @var array
     *
     * @ORM\Column(name="technology", type="array")
     */
    private $technology;

    /**
     * @var array
     *
     * @ORM\Column(name="users", type="array")
     */
    private $users;

    /**
     * @var array
     *
     * @ORM\Column(name="rewards", type="array")
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
     * @param array $technology
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
     * @return array
     */
    public function getTechnology()
    {
        return $this->technology;
    }

    /**
     * Set users
     *
     * @param array $users
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
     * @return array
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set rewards
     *
     * @param array $rewards
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
     * @return array
     */
    public function getRewards()
    {
        return $this->rewards;
    }
}
