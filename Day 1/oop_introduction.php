<?php
/*
    Pros of OOP:
        - Reusability
        - Roles separation

    Warning, you can't re-declare a class: differents names
*/

/*
    Classes have 'internal variables'called 'properties'
    They have also 'internal functions called 'methods'
*/

// Declare a class
class Car
{
    // Properties
    private $color; // red, blue, ...
    public $brand; // ferrari, bmw, ...
    public $category; // hatback, conversible, ...
    // Methods
    public function __construct($color, $brand)
    {
        $this->color = $color;
        $this->brand = $brand;
    }

    public function __toString()
    {
        return "My car is a " . $this->brand . ", color: " . $this->color;
    }

    public function setColor($newColor)
    {
        $this->color = $newColor; // Edit the property
    }
    public function getColor()
    {
        return $this->color; // Return the property
    }

    public function getColorupperCase()
    {
        return strtoupper($this->getColor());
    }
}

// create an object : instance of a class
$myCar = new Car('blue', 'Audi');
var_dump($myCar);
// we can create as much objects as we want
//$ferrari = new Car();
//$lada = new Car();

// I can access public properties (or methods)
$myCar->brand = 'Ferrari';
// I can't access private properties
//$myCar->color = 'red';
// But you can use public method
$myCar->setColor('red');
// Display the property using the method
echo $myCar->getColor();

var_dump($myCar);

// Create a vaiables which is link to the same object as the first one
$anotherCar = $myCar;
var_dump($anotherCar);

echo $anotherCar->getColorupperCase() . '<br>';

// uses the __toString to return a string  to display
echo $myCar;

/*
    Good practices:
    - One class = one file
    - Capital letter for the first letter and for the Other words (Pascal Case)
    Example: HelloWord / Car / CoffeMug ....
*/
