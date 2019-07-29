<?php
/*	-- Exercise 2 :

	- Part 1

		A program asks the user for a file name.
		For now, the program does nothing else.

	- Part 2

		Now, when the user enters the name of the file, the program will read this file and then display the contents of it.

		You must handle the case where the file does not exist.

	- Part 3

		In case the file does not exist, give the user an additional chance to enter a new file name.
		The user has 3 chances for enter a valid filename.


	-- Exercice 3 :

	Remember exercises on animals, humans, robots....

	Unfortunately, when employees work, sometimes some of these employees are injured: it is known as work accident.

	There is one in four chance that a workplace accident will occur.
	When this happens, you have to remove the employee from the worker list and put him on a list of injured workers.

	A robot can't be injured.

	Tips : When a human works, it is necessary to use a random and to raise an exception 'work accident'.
*/
class FileNotExistException extends Exception
{ };

$erro = "";
$fileContent = "";
$tries = isset($_POST["tries"]) ? $_POST["tries"] : 0;

if (isset($_POST["submitButton"]) && $_POST["fileName"]) {
	$fileName = $_POST["fileName"];
	try {
		if (!file_exists($fileName)) throw new FileNotExistException();

		$fileHandle = fopen($fileName, 'r');
		while (!feof($fileHandle)) {
			$fileContent .= fgets($fileHandle);
		}
		fclose($fileHandle);
		$tries = 0;
	} catch (FileNotExistException $e) {
		$erro = "File does not exist!!";
		$tries++;
		if ($tries >= 3) $erro .= " You lost your chance!!!!";
	}
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
		<input type="hidden" name="tries" value="<?php echo $tries; ?>">
		<label for="number">File name:</label>
		<input type="text" name="fileName" placeholder="Enter the file name">
		<span style="color:red"><?php echo $erro; ?></span>
		<?php if ($tries < 3) { ?>
			<input type="submit" name="submitButton" value="Send">
		<?php } ?>
	</form>
	<textarea cols="60" rows="30"><?php echo $fileContent; ?></textarea>
</body>

</html>