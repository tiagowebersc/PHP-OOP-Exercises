<?php

namespace Flowers;

class User
{
    private $id;
    private $email;

    public function __construct($id, $email)
    {
        $this->id = $id;
        $this->email = $email;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getMail()
    {
        return $this->email;
    }
}

require_once 'database.php';
class UserManager
{
    public function login($email, $password)
    {
        if (empty($email)) return false;
        if (empty($password)) return false;

        $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
        $dbFound = mysqli_select_db($conn, DB_NAME);
        $user = "";
        if (!$dbFound) {
            return false;
        } else {
            $query = "SELECT * FROM users WHERE email = '" . $email . "';";
            $results = mysqli_query($conn, $query);
            if ($row = mysqli_fetch_assoc($results)) {
                $hashedPass = $row['hashPassword'];
                if (password_verify($password, $hashedPass)) {
                    $user = new User($row['idUser'], $row['email']);
                } else {
                    mysqli_close($conn);
                    return false;
                }
            } else {
                mysqli_close($conn);
                return false;
            }
        }
        mysqli_close($conn);
        return $user;
    }
}
