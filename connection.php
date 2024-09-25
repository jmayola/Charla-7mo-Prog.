<?php
$host = 'localhost'; // or your database host
$user = 'root'; // or your database username
$pass = ''; // or your database password
$db = 'charla'; // your database name

$connection = mysqli_connect($host, $user, $pass, $db);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>