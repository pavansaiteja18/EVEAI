<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "feminine";

// Create connection
$con = mysqli_connect($server, $username, $password, $database);

if ($con) {
    echo "✅ Database connected successfully!";
} else {
    echo "❌ Connection failed: " . mysqli_connect_error();
}
?>
