<?php
require_once "Creature.php";
class Mechanical extends Creature
{
    private $identifier;
    private $color;

    public function __construct($identifier, $color)
    {
        $this->identifier = $identifier;
        $this->color = $color;
    }
}
