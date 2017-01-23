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
	 * @var int
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

    /**
     * @var int
     *
     * @ORM\OneToMany(targetEntity="User", mappedBy="friendsWithMe")
     */
    private $userA;

	/**
	 * @var int
	 *
	 * @ORM\ManyToOne(targetEntity="User", inversedBy="friends")
	 */
	private $userB;

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
