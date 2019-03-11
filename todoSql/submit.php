<?php
require("connection.php");

$sql = "INSERT INTO tasks (caption, isCompleted)
VALUES ('$_POST[textbox]', '0')";

if ($conn->query($sql) === TRUE) //conn is the connection varible
{ 
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>