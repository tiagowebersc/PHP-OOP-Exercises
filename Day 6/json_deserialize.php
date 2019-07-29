<?php
/*
    !JSON:
    It's a data format which allow to store datas. Most of the time, the data represents an object.
    It's a easy to read and syntax is simple. It's lightweight and allow fast data transfer.

    !Syntax:
    - {....} : Curly brackets define an object
    - [....] : Brackets define an array
    - Json understand Strings, Boolean and Numbers

    !SERIALIZATION
    Serialization is the process to convert an object into a string.

    !DESERIALIZATION
    Deserialization is the process to retrieve a string and convert this string into an object
*/

// Step 1 : get the content of the json file
$jsonFile = file_get_contents("movie.json");
var_dump($jsonFile);

// Step 2 : deserialize json
$myObject = json_decode($jsonFile);
var_dump($myObject);

// Step 3 : I can access object's properties
echo $myObject->title;

// Step 1 : get the content of the json file
$jsonFile = file_get_contents("array_movie.json");
var_dump($jsonFile);

// Step 2 : deserialize json
$myObject = json_decode($jsonFile);
var_dump($myObject);

// Step 3 : I can access object's properties
echo $myObject[1]->title;
