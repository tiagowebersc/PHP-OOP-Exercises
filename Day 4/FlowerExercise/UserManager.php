<?php

class UserManager
{
  public function login($mail, $password)
  {
    // 1 - Connect to the database
    require_once 'database.php';

    // 2 - Query the database
    // 2.1 - Prepare the query
    $userQuery = 'SELECT *
    FROM users
    WHERE mail=? AND password=?';
    $userPrep = $pdo->prepare($userQuery);

    $userPrep->bindValue(1, $mail);
    $userPrep->bindValue(2, $password);

    // 2.2 - Execute the query
    $userPrep->execute();

    // 2.3 - Fetch/Get the results
    $row = $userPrep->fetch(PDO::FETCH_ASSOC);

    // 3 - Return false OR a User
    if ($row) {
      // User exists. Create the user and return it
      require_once 'User.php';
      $user = new User($row['idUser'], $row['email']);
      return $user;
    } else {
      // No record found in DB
      return false;
    }
  }
}
