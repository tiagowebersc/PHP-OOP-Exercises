<?php

abstract class Creature
{
  protected $_name;
  protected $_color;
  protected $_sex;

  public function __construct($name, $sex, $color)
  {
    $this->_name = $name;
    $this->_color = $color;
    $this->_sex = $sex;
  }
}
