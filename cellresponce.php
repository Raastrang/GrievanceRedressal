<?php 
session_start();
echo"welcome to ".$_SESSION['xyz']."<br>";
?>

?>
<a href="logout.php">logout</a>
<div>
<form class="com" method="post">
    <center
 
        <label> <b>comment:</b><br> <textarea name="Comments" rows="30" cols="47" name="mes"> write here</textarea></label><br>
        
    
        
            
            <input type="submit" value="submit" name="submit">
            <input type="submit" value="cancel" name="cancel">
       
     </center>
    </form>
</div>

            
