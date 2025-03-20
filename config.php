<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "feminine";

// Connect to database
$con = mysqli_connect($server, $username, $password, $database);

if (!$con) {
    die("Error: Connection failed due to " . mysqli_connect_error());
}
?>
