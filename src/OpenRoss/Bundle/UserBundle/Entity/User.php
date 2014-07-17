<?php

namespace OpenRoss\Bundle\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 * Class User
 * @package OpenRoss\Bundle\UserBundle\Entity
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var $id
     */
    protected $id;

    /**
     * Class constructor
     */
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}
