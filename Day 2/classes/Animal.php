<?php
class Animal
{
    protected $numberOfLegs;
    protected $color;
    protected $sex;
    protected $name;

    public function __construct($numberOfLegs, $color, $sex, $name)
    {
        $this->numberOfLegs = $numberOfLegs;
        $this->color = $color;
        $this->sex = $sex;
        $this->name = $name;
    }
}
