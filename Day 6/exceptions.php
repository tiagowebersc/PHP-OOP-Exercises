<?php
/*
EXCEPTIONS
Exceptions must be handle by the dev.
Exceptions are handled in a Object Oriented way.

When an exception is thrown, an 'Exception' object is created.
An Exception Object contains some details.
It have some methods : getMessage(), getCode(), toString() ...

Syntax :
    throw new Exception ("This is an exception");

    'throw' allow to trigger an exception 
    'new' create an instance of an exception

    Handle exceptions with Try ... Catch
 */

try {
    echo 'Everything is fine<br>';
    $msg = "This is an exception example";
    throw new Exception($msg);
    echo 'Everything is still fine<br>';
} catch (Exception $e) {
    echo "I catch my exception<br>";
    var_dump($e);
}

function calcul($x, $y)
{
    return $x * $y;
}

try {
    calcul(1);
} catch (ArgumentCountError $e) {
    echo "BOOOOOM";
}


echo "<hr>";
require_once 'CustomException.php';
try {
    throw new CustomException("My Custom Exception Class");
} catch (CustomException $e) {
    echo "BOOOOOM";
}

echo "<hr>";

/* How to handle multiple Exception type
 Example:
    I have a script that wait for a number.
    Divide 25 by this number.
 */
class DivideByZeroException extends Exception
{ };
class DivideByNegativeException extends Exception
{ };

try {
    echo test(25);
} catch (DivideByZeroException $e) {
    echo "ZEROOOOOO<br>";
} catch (DivideByNegativeException $e) {
    echo "Negative<br>";
} catch (Exception $e) {
    echo "Unknow exception<br>";
} finally {
    echo "finished!<br>";
}

function test($x)
{
    $denominator = 0;
    if ($denominator == 0) throw new DivideByZeroException();
    else if ($denominator < 0) throw new DivideByNegativeException();

    echo x / $denominator;
}
