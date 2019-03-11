<!DOCTYPE html>
<html>
<body>
<?php
include "connection.php";
?>
<?php   

$result = mysqli_query($conn,"SELECT * FROM tasks");
$row = mysqli_fetch_array($result);

?>


<form action="/submit.php" method="POST">
  task:<br>
  <input type="text" name="textbox">
  <br>
  <br><br>
  <input type="submit" value="Submit">
</form> 


<?php


while($row = mysqli_fetch_array($result)) {   ?>
        <li>
            <?php echo $row['caption']; ?>
            <input type = 'button' value ='Remove' onclick='location.href = "removeItem.php?index=<?php echo $row["id"];  ?>"'>
        </li>  
    <?php } ?>

</body>
</html>
