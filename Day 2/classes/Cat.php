<?php
require_once "Animal.php";
class Cat extends Animal
{
    public function __construct($numberOfLegs, $color, $sex, $name)
    {
        parent::__construct($numberOfLegs, $color, $sex, $name);
    }

    public function meow()
    {
        echo $this->name . ' says Meow<br>';
    }
}
