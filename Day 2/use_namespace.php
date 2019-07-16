<?php


require "namespace.php";
// With the complete path
$myClass = new MyProject\Utilities\MyClass();

// With use
use MyProject\Utilities\MyClass;

$myClass2 = new MyClass();

// With use with alias
use MyProject\Utilities\MyClass as TestClass;
use MyProject\Tools\MyClass as Test2Class;

$myClass3 = new TestClass;
$myClass4 = new Test2Class;


$myClass->doStuff();
$myClass2->doStuff();
$myClass3->doStuff();
$myClass4->doStuff();
