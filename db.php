<?php
$server = "localhost";
$user = "root";
$password = "204858860";
$db = "phpform";

// Create connection
$conn = mysqli_connect($server, $user, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
} else {
echo "Connected successfully";}
?>