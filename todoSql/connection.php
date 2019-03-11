<?php
$servername = "127.0.0.1";
$username = "root";
$password = "goldtree9";
$dbname = "todo"; //optional

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    exit("Connection failed: " . mysqli_connect_error());
}

// echo "Connected successfully";

?>
