<?php

namespace Flowers;

class User
{
    private $id;
    private $email;

    public function __construct($id, $email)
    {
        $this->id = $id;
        $this->email = $email;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getMail()
    {
        return $this->email;
    }
}

namespace Flowers\Db;

class UserManager
{ }
