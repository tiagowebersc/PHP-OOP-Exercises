<?php

require_once 'IMakeSound.php';
require_once 'Creature.php';

class Animal extends Creature implements IMakeSound
{
  protected $_legs;

  public function __construct(
    $name,
    $sex,
    $color,
    $legs = 4
  ) {
    parent::__construct($name, $sex, $color);
    $this->_legs = $legs;
  }

  public function makeSound()
  {
    return 'Shshshshshshshh (' . $this->_name . ')<br>';
  }
}
