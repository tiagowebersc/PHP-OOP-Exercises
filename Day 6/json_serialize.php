<?php
// Serialize
// Step 1 : Create an object
$myObj = new stdClass();
var_dump($myObj);
$myObj->title = "Jurassic Park";
$myObj->release_year = 2018;
var_dump($myObj);
// Step 2 :  Serialize my object
$myJson = json_encode($myObj, JSON_PRETTY_PRINT);
var_dump($myJson);


require_once 'Movie.php';
// Class with public attributes
$jurrasic = new Movie("Jurassic park", 2018);
var_dump($jurrasic);
$json = json_encode($jurrasic, JSON_PRETTY_PRINT);
var_dump($json);

// Class with private attributes using interface JsonSerializable
$jurrasic = new MoviePri("Jurassic park", 2018);
var_dump($jurrasic);
$json = json_encode($jurrasic, JSON_PRETTY_PRINT);
var_dump($json);
