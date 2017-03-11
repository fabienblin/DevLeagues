<?php

namespace DevLeaguesBundle\Entity\Technology;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use DevLeaguesBundle\Entity\User\User;
use DevLeaguesBundle\Entity\User\UserTechnology;
use DevLeaguesBundle\Entity\League\League;

/**
 * Technology
 *
 * @ORM\Table(name="technology")
 * @ORM\Entity(repositoryClass="DevLeaguesBundle\Repository\TechnologyRepository")
 */
class Technology
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
     * @ORM\Column(name="version", type="integer", nullable=true)
     */
    private $version;

	/**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="DevLeaguesBundle\Entity\Challenge\Challenge", mappedBy="technologies")
     */
    private $challenges;

	/**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="DevLeaguesBundle\Entity\League\League", mappedBy="technologies")
     */
    private $leagues;

	/**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="DevLeaguesBundle\Entity\User\UserTechnology", mappedBy="technology", cascade={"persist", "remove"})
     */
    private $userTechnologies;

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
     * @return Technology
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
     * Set version
     *
     * @param integer $version
     *
     * @return Technology
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

	/**
     * Set challenges
     *
     * @param ArrayCollection $challenges
     *
     * @return Technology
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
     * Set usersTechnologies
     *
     * @param ArrayCollection $usersTechnologies
     *
     * @return Technology
     */
    public function setUserTechnologies($usersTechnologies)
    {
        $this->usersTechnologies = $usersTechnologies;

        return $this;
    }

    /**
     * Get usersTechnologies
     *
     * @return ArrayCollection
     */
    public function getusersTechnologies()
    {
        return $this->usersTechnologies;
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
     * @return Technology
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
