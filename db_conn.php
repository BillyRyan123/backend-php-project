<?php
$hostname = "localhost"; 
$username = "root";      
$password = "";          
$dbname   = "reliancedatabase"; 
$port=3307;

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $dbname,$port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
// echo connected successfully
