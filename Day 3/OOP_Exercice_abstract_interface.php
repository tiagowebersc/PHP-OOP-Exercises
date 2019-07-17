<?php

/*
	Using the Animal/Robot/Human exercise.

	- Step 1 :
		Think about the nature of your classes. At least one of them will never be instantiate...
		You need to turn them into abstract class.
		Maybe change some methods to make it abstract methods.
		Tips : If you pay attention, many of our classes can 'talk' or 'make a sound'

	- Step 2 :
		Some of your classes can do the same job.
		Actually they have the same 'role'.
		Use an interface to abstract all of this.

	- Step 3 :

		In a main program :

		1. Create an array of animals and humans (randomly cats, dogs or humans)
		2. Create an array of human/robots (randomly generated)
		3. Create a script where :
			- You loop ten times
			- Each time, you randomly pick one animal (or human) in the first array
			- The randomly pick element should make a sound
		4. Create a script where :
			- You loop ten times
			- Each time, you randomly pick a human (or a robot) in the second array
			- The randomly pick element should work.
			Each object should be displayed before working.
			Example : 'The woman Madonna, who is blond, is going to work'.
			*/
require_once "classes/Animal.php";
require_once "classes/Human.php";
require_once "classes/Robot.php";
$human = new Human("Max", "Male", "Brown");
echo $human->talk();
echo $human->work();

$robot = new Robot("C3P0", "gold");
echo $robot->work();

// Animal / Human
$array1 = [];
for ($i = 0; $i < 10; $i++) {
	$var = rand(1, 100);
	if ($var % 2 === 0)
		$array1[$i] = new Animal("Beast " . $var, 'Male', 'Black');
	else
		$array1[$i] = new Human("Guy " . $var, 'Male', 'Brown');
}
// Human / Robot
$array2 = [];
for ($i = 0; $i < 10; $i++) {
	$var = rand(1, 100);
	if ($var % 2 === 0)
		$array2[$i] = new Robot("Machine " . $var, 'Silver');
	else
		$array2[$i] = new Human("Guy " . $var, 'Male', 'Brown');
}

var_dump($array1);
var_dump($array2);

for ($i = 0; $i < 10; $i++) {
	$var = rand(0, 9);
	echo $array1[$var]->makeSound();
}
echo '--------------------------------------------<br>';
for ($i = 0; $i < 10; $i++) {
	$var = rand(0, 9);
	echo $array2[$var]->work();
}
