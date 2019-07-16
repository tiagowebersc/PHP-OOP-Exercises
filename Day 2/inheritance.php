<?php
/* It's possible to extends the classes.
For example I have a Car class extending Vehicle Class
*/
// The parent - Base
class Vehicle
{
    // protected is available for all childrem
    // private only to the own class
    protected $color;

    // Construct
    public function __construct()
    {
        $this->color = "red";
    }

    public function getColor()
    {
        return $this->color;
    }
}

// The child
class Car extends Vehicle
{
    private $wheelsBrand;
    // Construct
    public function __construct()
    {
        parent::__construct();
        $this->wheelsBrand = "Brembo";
    }
    public function getColor()
    {
        return $this->color;
    }
}

$myVehicle = new Vehicle();
echo $myVehicle->getColor();
var_dump($myVehicle);
echo '<br>';
$myCar = new Car();
echo $myCar->getColor();
var_dump($myCar);
