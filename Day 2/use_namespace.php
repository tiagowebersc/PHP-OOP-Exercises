<?php


require "namespace.php";
// With the complete path
$myClass = new MyProject\Utilities\MyClass();

// With use
use MyProject\Utilities\MyClass;

$myClass2 = new MyClass();

// With use with alias
use MyProject\Utilities\MyClass as TestClass;

$myClass3 = new TestClass;


$myClass->doStuff();
$myClass2->doStuff();
$myClass3->doStuff();
