<?php
$fileFromSystem = file_get_contents("data.txt");
$todoCollection = unserialize($fileFromSystem);
if(filesize('data.txt') == 0) {
    $todoCollection = [];//array();
}
array_push($todoCollection, ['caption' => $_POST['textbox'] , 'isCompleted' => 'false']);

$fileFromSystem = serialize($todoCollection);
file_put_contents('data.txt', $fileFromSystem);
//print_r($fileFromSystem);
header("Location: index.php");
?>