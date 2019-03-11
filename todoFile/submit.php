<?php
$fileFromSystem = file_get_contents('data.txt');
$todoCollection = unserialize($fileFromSystem);

array_push($todoCollection, ['caption' => $_POST['textbox'] , 'isCompleted' => false]);

$fileFromSystem = serialize($todoCollection);
file_put_contents('data.txt', $fileFromSystem);

header("Location: index.php");
?>