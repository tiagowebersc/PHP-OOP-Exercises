<?php
/*
	-- Exercise 1 :

	- Part 1

		A script ask for a number (create a form).

	- Part 2

		Create a function that expect an argument $number.
		User should now enter an integer between 1 and $number.
		Edit your function to match these constraints.
		Each time you call the function, you can generate the $number randomly if you want.

		For example : myFunction(50) -> Now the user should enter a number between 1 and 50.

	- Part 3

		We will now add checks to ensure that our program meets all our expectations.

		We know what must not happen :
			– user enter a number that is not between 1 and $number 
			- user didn't enter a number (for example, he enters some string..)

		Each error will have to be detected by the program and triggered by a specific exception.
		It is therefore necessary to manage two different classes of exception.
*/
class OutOfRange2Exception extends Exception
{ };
class NotANumberException extends Exception
{ };

$erro = "";
if (isset($_POST["submitButton"]) && $_POST["number"]) {
	$userNumber = $_POST["number"];
	try {
		checkNumber($userNumber);
	} catch (NotANumberException $e) {
		$erro = "You should enter a number!!";
	} catch (OutOfRange2Exception $e) {
		$erro = "Your number is out of the range!!";
	}
}

function checkNumber($userNumber)
{
	$number = rand(1, 100);
	if (!is_numeric($userNumber)) throw new NotANumberException();
	if ($userNumber < 1 || $userNumber > $number) throw new OutOfRange2Exception();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>

<body>
	<form action="" method="post">
		<label for="number">Number:</label>
		<input type="text" name="number" placeholder="Enter the number">
		<span style="color:red"><?php echo $erro; ?></span>
		<input type="submit" name="submitButton" value="Send">
	</form>
</body>

</html>