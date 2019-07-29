<?php
/*
    Errors vs Exceptions
    Errors :
        An error is a unexpected result that can't be handle by the program itself.
        Errors are fixed by fixing directly the code.

        For example : you forgot a semicolon, infinite loop .....

    Exceptions :
        An exception is a unexpected result that can be handle by the script.

        For example : you try to open a file, but this file doesn't exists.
        This exception can be handle by either creating the file or you can give the user and option to look for the file.
*/


function custom_error($error_no, $error_msg)
{
    echo "Something went wrong<br>";
    echo "Error code : " . $error_no . "<br>";
    echo "Error message : " . $error_msg . "<br>";
}
set_error_handler("custom_error");


// HANDLE ERRORS
$number = 0;
echo 15 / $number;
