<?php

// Default way to import: 
//require "namespace.php";

// autoload function: directly load all the files we need in the code
// autoload will look in the current folder
// but the file must have the same name as the class
spl_autoload_register();

use MyProject\Utilities\MyClass as TestClass;
use MyProject\Tools\MyClass as Test2Class;

$myClass3 = new TestClass;
$myClass4 = new Test2Class;


$myClass3->doStuff();
$myClass4->doStuff();
