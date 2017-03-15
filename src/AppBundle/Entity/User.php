<?php
namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\UserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Tells if the the given user is this user.
     *
     * Useful when not hydrating all fields.
     *
     * @param null|UserInterface $user
     *
     * @return boolean
     */
    public function isUser(UserInterface $user = null)
    {
        // TODO: Implement isUser() method.
    }

    /**
     * Sets the locking status of the user.
     *
     * @param boolean $boolean
     *
     * @return self
     */
    public function setLocked($boolean)
    {
        // TODO: Implement setLocked() method.
    }
}