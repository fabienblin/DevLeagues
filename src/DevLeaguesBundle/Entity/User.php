<?php

namespace DevLeaguesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="DevLeaguesBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
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
     * @var array
     *
     * @ORM\Column(name="leagues", type="array", nullable=true)
     */
    private $leagues;

    /**
     * @var array
     *
     * @ORM\Column(name="technologies", type="array", nullable=true)
     */
    private $technologies;

    /**
     * @var array
     *
     * @ORM\Column(name="events", type="array", nullable=true)
     */
    private $events;

    /**
     * @var array
     *
     * @ORM\Column(name="friends", type="array", nullable=true)
     */
    private $friends;


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
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * @param array $leagues
     *
     * @return Users
     */
    public function setLeagues($leagues)
    {
        $this->leagues = $leagues;

        return $this;
    }

    /**
     * Get leagues
     *
     * @return array
     */
    public function getLeagues()
    {
        return $this->leagues;
    }

    /**
     * Set technologies
     *
     * @param array $technologies
     *
     * @return Users
     */
    public function setTechnologies($technologies)
    {
        $this->technologies = $technologies;

        return $this;
    }

    /**
     * Get technologies
     *
     * @return array
     */
    public function getTechnologies()
    {
        return $this->technologies;
    }

    /**
     * Set events
     *
     * @param array $events
     *
     * @return Users
     */
    public function setEvents($events)
    {
        $this->events = $events;

        return $this;
    }

    /**
     * Get events
     *
     * @return array
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Set friends
     *
     * @param array $friends
     *
     * @return Users
     */
    public function setFriends($friends)
    {
        $this->friends = $friends;

        return $this;
    }

    /**
     * Get friends
     *
     * @return array
     */
    public function getFriends()
    {
        return $this->friends;
    }
}
