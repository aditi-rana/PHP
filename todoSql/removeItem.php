<?php
include "connection.php";
$i=$_REQUEST['index'];

$sql = "DELETE FROM tasks WHERE id=$i";
$conn->query($sql);


header("Location: index.php");
?>