<?php
require_once "Creature.php";
class Human extends Creature
{
    private $name;
    private $hairColor;
    private $sex;

    public function __construct($name, $hairColor, $sex)
    {
        $this->name = $name;
        $this->hairColor = $hairColor;
        $this->sex = $sex;
    }

    public function talk()
    {
        echo $this->name . ' talking ... <br>';
    }
}
