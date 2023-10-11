<?php
require_once 'connect.php';

$firstname = trim($_POST['firstname']); 
$lastname = trim($_POST['lastname']);

$pdo = new \PDO(DNS, USER, PASS);

$query = "INSERT INTO friend (firstname, lastname) VALUES (:firstname, :lastname)";
$statement = $pdo->prepare($query);

$statement->bindValue(':firstname', $firstname, \PDO::PARAM_STR);
$statement->bindValue(':lastname', $lastname, \PDO::PARAM_STR);

$statement->execute();

header("Location: form.php");

