<?php
/*
PDO - PHP Data Object
PDO is an abstraction layer to query the database
PDO take care of more that 12 different type of databases

We don't use an array or parameters to connect to the database
Instead we use a DSN (Data Source Name)

The DSN summarise the parameters for the connection
*/

// Connect to the DB: 
$dsnConnection = 'mysql:host=localhost;dbname=flower_shop';
$pdo = new PDO($dsnConnection, 'root', '');

// Execute queries
$deleteQuery = 'DELETE FROM flowers WHERE idFlower=5';
// exec() only return the number of rows affected
var_dump($pdo->exec($deleteQuery));


$selectQuery = 'SELECT * FROM flowers';
// query() will return a rowset (results set)
// return a PDOStatement
$result = $pdo->query($selectQuery);
var_dump($result);

// For now result have been retrieved but we need to use the fetch() method to use/display them
// fetch() will get the first element returned by mysql 
// We need to tell him how to fetch(associative array)
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
}

// Prepared Statements
$email = 'aa'; //$_POST['email'];
$password = 'bb'; //$_POST['password'];
$query = "SELECT * FROM users WHERE email = '$email' AND hashPassword = '$password'";

$preparedQuery = "SELECT * FROM users WHERE email = ? AND hashPassword = ?";
$prep = $pdo->prepare($preparedQuery);
// Associate value to the placeholders
$prep->bindValue(1, $email);
$prep->bindValue(2, $password);
// Compile and execute the query
// return rowset
$result = $prep->execute();
var_dump($result);
/*
Pros of prepared statements:
    - Safety!
    - Better performance

It's also usefull when we want to insert multiple records.
Instead of doing multiple INSERT, we'll prepare the query and use it in a loop for example...
*/
$prep = $pdo->prepare("INSERT INTO flowers (name, price) VALUES (?, ?)");

$name = ' Flower ';
$price = 12.23;
$prep->bindValue(1, $name);
$prep->bindValue(2, $price);
var_dump($prep->execute());

$name = ' Flower 2';
$price = 54.32;
var_dump($prep->execute());

// Ctrl Shift P
