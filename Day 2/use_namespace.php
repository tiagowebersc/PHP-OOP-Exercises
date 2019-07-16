<?php


require "namespace.php";
// With namespace;
$myClass = new MyProject\Utilities\MyClass();
// Without namespace, we would have write this:
// $myClass = new MyClass();

use MyProject\Utilities\MyClass;

$myClass2 = new MyClass();
