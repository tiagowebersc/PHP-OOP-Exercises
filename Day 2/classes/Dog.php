<?php
require_once "Animal.php";
class Dog extends Animal
{
    public function __construct($numberOfLegs, $color, $sex, $name)
    {
        parent::__construct($numberOfLegs, $color, $sex, $name);
    }

    public function bark()
    {
        echo $this->name . ' says Bark<br>';
    }
}
