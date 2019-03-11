<?php
session_start();


// $_SESSION['todo'][4] = $_POST['item'];

// header("location:show.php");

array_push($_SESSION['todo'], ['caption' => $_POST['item'], 'isCompleted' => false]);
header("Location: show.php");
// foreach($_SESSION['todo'] as $x => $x_value) {
//     echo "Key=" . $x . ", Value=" . $x_value;
//     echo "<br>";
// }

?>