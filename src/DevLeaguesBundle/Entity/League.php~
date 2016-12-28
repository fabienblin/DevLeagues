<?php

namespace DevLeaguesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\ManyToMany(targetEntity="User", mappedBy="leagues")
     */
    private $users;


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
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add user
     *
     * @param \DevLeaguesBundle\Entity\User $user
     *
     * @return League
     */
    public function addUser(\DevLeaguesBundle\Entity\User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \DevLeaguesBundle\Entity\User $user
     */
    public function removeUser(\DevLeaguesBundle\Entity\User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }
}
