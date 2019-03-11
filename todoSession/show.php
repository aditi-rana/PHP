<?php
 
session_start();
?>
<!doctype html>
<html>
    <body>
        <h1>Your list!</h1>
        <form action="add.php" method='post'>
            <input type="text" name="item">
            <button type="submit"></button>
        </form>
       <?php 
            if(!isset($_SESSION['todo'])){
                $_SESSION['todo'] = array();
            }
        ?>
        <?php
            for($i = 0; $i < sizeof($_SESSION['todo']); $i++) {  ?>
            <li>
                <?php echo $_SESSION['todo'][$i]['caption']; ?>
                <input type = 'button' value ='Remove' onclick='location.href = "delete.php?index=<?php echo $i; ?>"'>
            </li>  
            <?php } ?>
            
    
    </body>
</html>


