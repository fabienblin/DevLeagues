<?php

namespace DevLeaguesBundle\Entity\User;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * UserTechnology
 *
 * @ORM\Table(name="user_technology")
 * @ORM\Entity(repositoryClass="DevLeaguesBundle\Repository\User\UserTechnologyRepository")
 */
class UserTechnology
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
     * @var int
     *
     * @ORM\Column(name="experience", type="integer", nullable=true)
     */
    private $experience;

	/**
     * @var DevLeaguesBundle\Entity\User\User
     *
     * @ORM\ManyToOne(targetEntity="DevLeaguesBundle\Entity\User\User", inversedBy="userTechnologies")
     */
    private $user;

	/**
	 * @var DevLeaguesBundle\Entity\Technology\Technology
	 *
	 * @ORM\ManyToOne(targetEntity="DevLeaguesBundle\Entity\Technology\Technology", inversedBy="userTechnologies")
	 */
	private $technology;

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
     * Set experience
     *
     * @param integer $experience
     *
     * @return UserTechnology
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
     * Get user
     *
     * @return \DevLeaguesBundle|Entity\User\User
     */
    public function getUser()
    {
        return $this->user;
    }

	/**
     * Set user
     *
     * @param \DevLeaguesBundle|Entity\User\User $user
     *
     * @return UserTechnology
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

	/**
     * Get technology
     *
     * @return \DevLeaguesBundle|Entity\Technology\Technology
     */
    public function getTechnology()
    {
        return $this->technology;
    }

	/**
     * Set technology
     *
     * @param \DevLeaguesBundle|Entity\Technology\Technology $technology
     *
     * @return UserTechnology
     */
    public function setTechnology($technology)
    {
        $this->technology = $technology;

        return $this;
    }
}
