<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class User extends Entity
{
    protected $_accessible = [
        "first_name" => true,
        "contact" => true,
        "email" =>true,
        "password" =>true
    ];
}

?>