<?php
require_once 'connect.php';

$pdo = new \PDO(DNS, USER, PASS);

$query = "SELECT * FROM friend";
$statement = $pdo->query($query);
$friends = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($friends);

// $query = "INSERT INTO friend (firstname, lastname) VALUES ('Chandler', 'Bing')";
// $statement = $pdo->exec($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php foreach ($friends as $friend): ?>
        <li> <?php  echo $friend['firstname'] . ' ' . $friend['lastname'] . "<br>"; ?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>