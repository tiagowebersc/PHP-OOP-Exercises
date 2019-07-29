<?php 

/*
	Exercise 1 :
	
	We have two tables : Movies and Directors.

	In the Directors table :
		- id
		- name
		- biography

	In the Movies table : 
		- id
		- title
		- release_year
		- category
		- director_id

	
	Write the SQL request to display a movie (id = 5) and his director using a junction (join).
	Note: Only write the SQL request, not the PHP.

*/
$pdo = new PDO('mysql:host=localhost;dbname=cinema', 'root', '');

$selectQuery = 'SELECT * FROM Movies m INNER JOIN Directors d ON m.director_id = d.id WHERE m.id = 5';
$result = $pdo->query($selectQuery);
var_dump($result);

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
}
