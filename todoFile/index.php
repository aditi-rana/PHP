<!DOCTYPE html>
<html>
<body>


<form action="/submit.php" method="POST">
  task:<br>
  <input type="text" name="textbox">
  <br>
  <br><br>
  <input type="submit" value="Submit">
</form> 
<?php
$fileFromSystem = file_get_contents("data.txt");
$todoCollection = unserialize($fileFromSystem);

for($x = 0; $x < count($todoCollection); $x++) {
  echo $todoCollection[$x]['caption'];
  echo $todoCollection[$x]['isCompleted'];
  echo "<br>";
}
?>
</body>
</html>
