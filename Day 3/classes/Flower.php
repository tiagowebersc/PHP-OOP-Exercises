<?php

namespace Flowers;

class Flower
{
    private $id;
    private $name;
    private $price;

    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
}

require_once 'database.php';
class FlowerManager
{
    public static function findAll()
    {
        $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
        $dbFound = mysqli_select_db($conn, DB_NAME);
        $list = [];
        if ($dbFound) {
            $query = "SELECT * FROM flowers;";
            $results = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($results)) {
                $flower = new Flower($row['idFlower'], $row['name'], $row['price']);
                $list[count($list)] = $flower;
            }
        }
        mysqli_close($conn);
        return $list;
    }
}
