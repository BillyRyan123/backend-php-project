<?php

$dsn="mysql:host=localhost;dbname=reliancedatabase;port=3307";
$dbusername="root";
$dbpassword="";
try {
    $pdo= new PDO($dsn,$dbusername,$dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    die("Connection failed: ". $e->getMessage());
}

