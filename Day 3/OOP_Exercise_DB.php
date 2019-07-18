<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Exercise DB</title>
</head>

<body>
	<?php
	/*

Overview : 
	Create a page to view some flowers.
	We will have, in database, the tables Flowers and Users

	In the Flowers table, we will record: The name of the flowers and their prices
	In the Users table: The email address and hash password
//! --sql commands-----------------------------------!
create database flower_shop;
use flower_shop;
create table flowers (
idFlower int(10) not null auto_increment primary key,
name varchar(50) not null,
price double(6,2) not null
);
create table Users(
idUser int(10) not null auto_increment primary key,
email varchar(50) not null,
hashPassword varchar(60) not null
);

INSERT INTO users (idUser, email, hashPassword) VALUES (1, 'tiagowebersc@gmail.com', '$2y$10$smiY/GwCdg7njHXjWK16tuCPZAcq3GCrW3DDej9KKH9CY9Y7tfG9W');
INSERT INTO flowers (idFlower, name, price) VALUES (1, 'True Joy Bouquet', 139.99);
INSERT INTO flowers (idFlower, name, price) VALUES (2, 'Dreams By BloomNation', 58.95);
INSERT INTO flowers (idFlower, name, price) VALUES (3, 'The FTD Beyond Blue Bouquet', 44.99);
//! -------------------------------------------------!
Step 1: Connecting users
	We will not take into account the creation of the users, they will be created manually in the database.
	We will create a class \Flowers\User and a class \Flowers\Db\UserManager, to manage the connection.

	Connection page will look like this:
*/
	require_once "classes/User.php";

	$login = "";
	$password = "";
	if (isset($_POST['login'])) $login = $_POST['login'];
	if (isset($_POST['password'])) $password = $_POST['password'];
	if (isset($_POST['login']) && isset($_POST['password'])) {

		$userManager = new Flowers\UserManager();
		$userLogged = $userManager->login($_POST['login'], $_POST['password']);

		if (!empty($userLogged)) {
			session_start();
			$_SESSION['user']['mail']   = $userLogged->getMail();
			$_SESSION['user']['id']     = $userLogged->getId();
			header("Location: view-flowers.php");
		} else {
			echo ":'(";
		}
	}

	/*
	Method UserManager::login($login, $password) will return either a User object, if the connection succeed, either false.


Step 2 : Affichage des fleurs
	Create the page view-flowers.php
	The user is redirect to this page if the connection is successfull.
	Create classes \Flowers\Flower and \Flowers\Db\FlowerManager
	Method \Flowers\Db\FlowerManager::findAll() will retrieve all the flowers

Step 3 :
	Ask the teacher if you want... there is a next step.
*/
	?>
	<form class="formLogin" action="" method="post">
		<h2>Login</h2>
		<label for="login">Login:</label>
		<input type="login" name="login" id="login" value="<?php echo $login; ?>" placeholder='Enter your login'>
		<label for="password">Password:</label>
		<input type="password" name="password" id="password" value="<?php echo $password; ?>" placeholder='Enter your password'>
		<input type="submit" value="Login" name="loginButton">
	</form>
</body>

</html>