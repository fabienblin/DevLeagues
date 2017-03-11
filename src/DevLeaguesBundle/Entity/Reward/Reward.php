<?php

namespace DevLeaguesBundle\Entity\Reward;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use DevLeaguesBundle\Entity\Challenge\Challenge;
use DevLeaguesBundle\Entity\User\User;

/**
 * Reward
 *
 * @ORM\Table(name="reward")
 * @ORM\Entity(repositoryClass="DevLeaguesBundle\Repository\RewardRepository")
 */
class Reward
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
     * @ORM\Column(name="value", type="integer", nullable=true)
     */
    private $value;

	/**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="DevLeaguesBundle\Entity\Challenge\Challenge", mappedBy="rewards")
     */
    private $challenges;

	/**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="DevLeaguesBundle\Entity\User\User", mappedBy="rewards")
     */
    private $users;

	/**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="DevLeaguesBundle\Entity\League\League", mappedBy="rewards")
     */
    private $leagues;

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
     * @return Reward
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
     * Set value
     *
     * @param integer $value
     *
     * @return Reward
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

	/**
     * Set challenges
     *
     * @param ArrayCollection $challenges
     *
     * @return Reward
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

	public function __toString()
	{
		return $this->name;
	}

}
