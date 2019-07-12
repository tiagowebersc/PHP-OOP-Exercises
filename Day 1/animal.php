<?php
/*
You can use static properties (or methods) without instantiate the class.
We can access these directly using the name of the class
*/
class Dog
{
    private $color;
    private $name;
    private $breed;

    public static function getLegsNumber()
    {
        return 4;
    }
}

// Call to the static method
echo Dog::getLegsNumber();
