<?php
/*
Interface looks like a class but has only static constants and abstract methods

PHP uses interfaces to implement multiple inheritances
(You can't inherit from only class)

Interfaces are used to implements/share roles.

An interface allow to specify  that one part of your code must be implemented by a class

Syntax:
*/
interface IExample
{
    // Methods
}
// to implements an interface in a class:
class example implements IExample
{ }

/* Take the example of our classes Animal/Dog/Cat...
Some of them can sit()
*/

interface IDomestic
{
    public function sit();
}
class Dog extends Animal implements IDomestic
{
    // must to be implemented
    public function sit()
    {
        return "OK!";
    }
}
