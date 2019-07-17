<?php

require_once 'IMakeSound.php';
require_once 'IWork.php';
require_once 'Creature.php';

class Human extends Creature implements IWork, IMakeSound
{
  public function work()
  {
    return $this->_name . ' is working!<br>';
  }

  public function talk()
  {
    return 'Hello, my name is ' . $this->_name
      . ', I am a ' . $this->_sex . '<br>';
  }

  public function makeSound()
  {
    return 'HUahuhauahauhaau (' . $this->_name . ')<br>';
  }
}
