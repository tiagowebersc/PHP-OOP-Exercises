<?php
$errors = [];
if (!empty($_POST)) {
    // Basics validations
    if (empty($_POST['firstName'])) $errors[count($errors)] = 'First name is mandatory';
    if (empty($_POST['lastName'])) $errors[count($errors)] = 'Last name is mandatory';

    if (count($errors) > 0) {
        echo implode('<br>', $errors);
    } else {
        $pdo = new PDO('mysql:host=localhost;dbname=real_state', 'root', '');

        $query = 'INSERT INTO user (firstName, LastName) VALUES (?, ?)';
        $insert = $pdo->prepare($query);
        $insert->bindValue(1, $_POST['firstName']);
        $insert->bindValue(2, $_POST['lastName']);
        if ($insert->execute()) {
            echo 'User successfully added!';
        } else {
            echo 'Erro inserting into the DB!';
        }
    }
}
