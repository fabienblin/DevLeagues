<?php

namespace DevLeaguesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Friend
 *
 * @ORM\Table(name="friend")
 * @ORM\Entity(repositoryClass="DevLeaguesBundle\Repository\FriendRepository")
 */
class Friend
{
	/**
	 * Relations between users (default = friend)
	 */
	const RELATION_MASTER = 'MASTER';
	const RELATION_PADAWAN = 'PADAWAN';
	const RELATION_FRIEND = 'FRIEND';

	/**
	 * @var integer
	 * @ORM\Id
     * @ORM\ManyToOne(targetEntity="User", inversedBy="friends")
	 * @ORM\JoinColumn(name="friend_id", referencedColumnName="id")
     */
    private $friendId;

	/**
	 * @var integer
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\OneToMany(targetEntity="User")
	 */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="relation", type="string", length=255)
     */
    private $relation;


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
     * Set userId
     *
     * @param integer $userId
     *
     * @return Friend
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set friendId
     *
     * @param integer $friendId
     *
     * @return Friend
     */
    public function setFriendId($friendId)
    {
        $this->friendId = $friendId;

        return $this;
    }

    /**
     * Get friendId
     *
     * @return int
     */
    public function getFriendId()
    {
        return $this->friendId;
    }

    /**
     * Set relation
     *
     * @param string $relation
     *
     * @return Friend
     */
    public function setRelation($relation)
    {
        $this->relation = $relation;

        return $this;
    }

    /**
     * Get relation
     *
     * @return string
     */
    public function getRelation()
    {
        return $this->relation;
    }
}
