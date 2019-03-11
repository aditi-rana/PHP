<?php
$fileFromSystem = file_get_contents('data.txt');
$todoCollection = unserialize($fileFromSystem);

$i=$_REQUEST['index'];
array_splice($todoCollection, $i, 1);

$fileFromSystem = serialize($todoCollection);
file_put_contents('data.txt', $fileFromSystem);

header("Location: index.php");
?>