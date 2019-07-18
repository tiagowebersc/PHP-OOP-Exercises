<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flowers</title>
</head>

<body>
    <?php
    session_start();
    if (isset($_POST['logout'])) {
        session_unset();
    }
    ?>
    <h1>Flowers</h1>
    <ul>

        <?php
        require_once "classes/Flower.php";
        if (isset($_SESSION['user'])) {
            $list = Flowers\FlowerManager::findAll();
            foreach ($list as $value) {
                ?>
                <li>
                    <div>
                        <p><?php echo $value->getName() ?></p>
                        <p><?php echo $value->getPrice() ?>€</p>
                    </div>
                </li>
            <?php
            }
        } else {
            header("Location: OOP_Exercise_DB.php");
        }
        ?>
    </ul>
    <form action="" method="post">
        <input type="submit" value="Logout" name="logout">
    </form>
</body>

</html>