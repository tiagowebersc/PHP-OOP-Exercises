<?php
/*
Abstraction

An abstract class cannot be instantiate
This class is meant to be extends

We can define some abstract methods in an abstract class
It's mandatory to implements those methods in the extending (children) classes
*/

abstract class Shape
{
    abstract public function calculateSurface();
}
/*
Because it's not meant to be instantiate this will give you an error
*/
$shape = new Shape();
/*
Class circle will extends the shape class
(to use the property/methods common for all shapes)
*/
class Circle extends Shape
{
    // Have to implement this method
    public function calculateSurface()
    {
        return (1 + 1);
    }
}


/*
1 - Abstrat class can have regular methods with code
2 - A class can even be abstract without containing any abstract methods
3 - If a class has one or more abstract methods, it must be an abstract class
*/
