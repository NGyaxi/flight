<?php
session_start();

$dns='mysql:host=localhost;dbname=flight';
$username='root';
$password='';

try {
    
$connect = new PDO($dns, $username, $password);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} 

catch (PDOException $e) {
    echo "connection failed! ".$e->getMessage();
}


 ?>