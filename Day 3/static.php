<?php

/*
Static variable is not linked to a specific object but a class
*/
class Sheep
{
    public static $countCloned = 0;
    public function __construct()
    {
        self::$countCloned++;
    }
}

class Sheep2
{
    public $countCloned = 0;
    public function __construct()
    {
        $this->countCloned++;
    }
}


$sheep1 = new Sheep();
$sheep2 = new Sheep();
$sheep3 = new Sheep();
var_dump($sheep1);
var_dump($sheep2);
var_dump($sheep3);
// can be use direct because is public
echo Sheep::$countCloned;


$sheep1 = new Sheep2();
$sheep2 = new Sheep2();
$sheep3 = new Sheep2();
var_dump($sheep1);
var_dump($sheep2);
var_dump($sheep3);

/*
'self' keyword refers to the class itself
As opposed to 'self', 'this' keyword refers to the instance of the object

It allows to access static properties of a class

A method can be static
*/
abstract class Log
{
    public static function display()
    {
        echo date('Y-m-d H:i:s') . ' - Code is doing fine';
    }
}

Log::display();
