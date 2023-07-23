<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=flight', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_POST['id'] ?? null;
if (!$id) {
    header('Location: airline.php');
    exit;
}

$statement = $pdo->prepare('DELETE FROM airlines_table WHERE id = :id');
$statement->bindValue(':id', $id);
$statement->execute();

header('Location: airline.php');