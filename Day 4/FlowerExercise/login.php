<?php
session_start();

if (isset($_POST['submit'])) {
  if (!empty($_POST['mail']) && !empty($_POST['password'])) {
    require_once 'UserManager.php';
    $userManager = new UserManager();
    $userLogged = $userManager->login($_POST['mail'], $_POST['password']);

    if (!empty($userLogged)) {
      $_SESSION['user']['mail']   = $userLogged->getMail();
      $_SESSION['user']['id']     = $userLogged->getId();
      echo 'Welcome USER';
    } else {
      echo 'Wrong credientals';
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
  <form action="" method="POST">
    <input type="text" name="mail" placeholder="Email address">
    <input type="text" name="password" placeholder="Entre password">
    <input type="submit" name="submit" value="LOGIN">
  </form>
</body>

</html>