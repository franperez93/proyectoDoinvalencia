<?php

namespace BackEnd\DataBaseBundle\Entity;

use FOS\UserBundle\Entiy\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
  * @ORM\Entity
  * @ORM\Table(name="fos_user")
  */

class User extends BaseUser
{
/**
  * @ORM\Id
  * @ORM\Comun (type="Integer")
  * @ORM\GeneratedValue(strategy="AUTO")
  */

  protected $id;

  public function __construct()
  {
    parent::_construct();
  }

}
