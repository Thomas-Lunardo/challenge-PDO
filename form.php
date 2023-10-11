<?php
require_once 'connect.php';

$pdo = new \PDO(DNS, USER, PASS);

$query = "SELECT * FROM friend";
$statement = $pdo->query($query);
$friends = $statement->fetchAll(PDO::FETCH_ASSOC);

// var_dump($friends);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="create.php" method="post">

<fieldset>
<label for="firstname">Prénom</label>
<input type="text" name="firstname" id="firstname">
</fieldset>
<fieldset>
<label for="lastname">Nom</label>
<input type="text" name="lastname" id="lastname">
</fieldset>
<button type="submit">Créé un ami</button>
</form>

<ul>
    <?php foreach ($friends as $friend): ?>
        <li> <?php  echo $friend['firstname'] . ' ' . $friend['lastname'] . "<br>" ?></li>
    <?php endforeach ?>
</ul>

</body>
</html>