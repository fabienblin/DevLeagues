<?php
/**
 * MessageModel.php
 * avanzu-admin
 * Date: 23.02.14
 */

namespace DevLeaguesBundle\Entity\Avanzu;

use Avanzu\AdminThemeBundle\Model\MessageInterface;
use DevLeaguesBundle\Entity\User;


/**
 * Simple implementation of the MessageInterface
 *
 */
class Message implements MessageInterface
{

    /**
     * Holds the sender
     *
     * @var User
     */
    protected $from;

    /**
     * holds the Recipient
     *
     * @var User
     */
    protected $to;

    /**
     * holds the date sent
     * @var \DateTime
     */
    protected $sentAt;

    /**
     * holds the subject
     *
     * @var string
     */
    protected $subject;

    /**
     * Creates a new Message object with the given values.
     *
     * SentAt will be set to the current DateTime when null is given.
     *
     * @param User $from
     * @param string        $subject
     * @param null          $sentAt
     * @param User $to
     */
    function __construct(User $from = null, $subject= '', $sentAt = null, User $to = null)
    {
        $this->to      = $to;
        $this->subject = $subject;
        $this->sentAt  = $sentAt ? : new \DateTime();
        $this->from    = $from;
    }


    /**
     * Set the sender
     *
     * @param \DevLeaguesBundle\Entity\User $from
     *
     * @return $this
     */
    public function setFrom(User $from)
    {
        $this->from = $from;
        return $this;
    }

    /**
     * Get the Sender
     *
     * @return \DevLeaguesBundle\Entity\User
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Set the date sent
     *
     * @param \DateTime $sentAt
     *
     * @return $this
     */
    public function setSentAt(\DateTime $sentAt)
    {
        $this->sentAt = $sentAt;
        return $this;
    }

    /**
     * Get the date sent
     *
     * @return \DateTime
     */
    public function getSentAt()
    {
        return $this->sentAt;
    }

    /**
     * Set the subject
     *
     * @param string $subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Get the subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set the recipient
     *
     * @param \DevLeaguesBundle\Entity\User $to
     *
     * @return $this
     */
    public function setTo(User $to)
    {
        $this->to = $to;
        return $this;
    }

    /**
     * Get the recipient
     *
     * @return \DevLeaguesBundle\Entity\User
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Get the identifier
     *
     * @return string
     */
    public function getIdentifier() {
        return $this->getSubject();
    }

}
