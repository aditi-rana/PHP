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

$file_lines = file('data.txt');
    //for($i = 0; $i < sizeof($_SESSION['todo']); $i++) { 
        foreach ($file_lines as $line) { ?>
        <li>
            <?php echo $line; ?>
            <input type = 'button' value ='Remove' onclick='location.href = "removeItem.php?index=<?php echo $i; ?>"'>
        </li>  
    <?php } ?>

</body>
</html>
