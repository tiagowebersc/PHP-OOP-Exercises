<?php
class CustomException extends Exception
{
    // Override the exception
    public function __construct($message, $code = 0)
    {
        // Custom code
        parent::__construct($message, $code);
    }


    public function customFunction()
    {
        echo "Custom function for this custom exception";
    }
}
