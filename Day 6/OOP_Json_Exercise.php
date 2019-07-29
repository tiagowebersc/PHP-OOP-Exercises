<?php

/*
	Exercise : 

	1 - Create a form that ask the user to enter a name and an email.

	2 - Create a class User. It have two properties : name and mail.

	3 - When the user enter informations in the form, you sould create a User object with those datas.

	4 - Save your user in a JSON file only if he doesn't exists :
		-- If he exists, display a message 'Welcome, old member'.
		-- Else, you save this user in the JSON file and display 'Welcome, new user'
		-- We can save multiple users in the same json file.
*/
class User implements JsonSerializable
{
	private $name;
	private $email;
	public function __construct($name, $email)
	{
		$this->name = $name;
		$this->email = $email;
	}

	public function getName()
	{
		return $this->name;
	}
	public function getEmail()
	{
		return $this->email;
	}

	// Overrride the method from JsonSerializable
	public function jsonSerialize()
	{
		return [
			"name" => $this->name,
			"email" => $this->email
		];
	}
}


if (isset($_POST['submitButton'])) {
	if (isset($_POST['name']) && isset($_POST['email'])) {
		$user = new User($_POST['name'], $_POST['email']);
		$userExists = false;
		$fileContent = "";
		$array = [];
		// Read the file 
		if (file_exists('users.json')) {
			$fileContent = file_get_contents('users.json');
			$array = json_decode($fileContent);
		}
		// look at the array if the user already exists
		foreach ($array as $userItem) {
			if ($userItem->name == $user->getName() && $userItem->email == $user->getEmail()) $userExists = true;
		}
		// if yes
		if ($userExists) {
			echo "Welcome, old member";
		} else {
			echo 'Welcome, new user';
			$array[count($array)] = $user;
			$fileHandle = fopen('users.json', 'w');
			fwrite($fileHandle, json_encode($array));
			fclose($fileHandle);
		}
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
		<label for="name">Name:</label>
		<input type="text" name="name" placeholder="Enter the name">
		<label for="email">Email:</label>
		<input type="email" name="email" placeholder="Enter the email">
		<input type="submit" value="Send" name="submitButton">
	</form>
</body>

</html>