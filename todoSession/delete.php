<?php
    session_start();
    $i=$_REQUEST['index'];
    array_splice($_SESSION['todo'],$i,1);
//    session_destroy();
header("Location: show.php");
?>