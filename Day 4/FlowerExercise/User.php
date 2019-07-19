<?php

class User
{
  // Properties
  private $_id;
  private $_mail;

  // Construct - call when create my object
  public function __construct($id, $mail)
  {
    $this->_id = $id;
    $this->_mail = $mail;
  }

  // Getters - to retrieve the private properties
  public function getId()
  {
    return $this->_id;
  }

  public function getMail()
  {
    return $this->_mail;
  }
}
