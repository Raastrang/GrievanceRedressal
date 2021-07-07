<?php 
session_start();
echo"welcome to ".$_SESSION['xyz']."<br>";
?>
<?php
include "./dbconnection2.php";
if (isset($_POST['submit']))
{
// get the form data
//$Fname = $_POST['Fname']; 
//$Lname = $_POST['Lname'];
//$RollNo = $_POST['RollNo'];
//$Branch = $_POST['Branch'];
//$Semester = $_POST['Semester'];
//$Password = $_POST['Password'];
$Comments = $_POST['Comments'];
//$Mobile = $_POST['Mobile'];

$sql="INSERT INTO studentragistration1 (Complain) VALUES ('$Comments')";
		if ($mysqli->query($sql)!==true)
		{
		echo "ERROR: Could not prepare SQL statement.";
		}
// redirec the user
//header("Location: showrecored.php");
//header("refresh: ; url=showrecored.php");
}
// close the mysqli connection
$mysqli->close();
?>
<a href="logout.php">logout</a>
<div>
<form class="com" method="post">
    <center
 
        <label> <b>comment:</b><br> <textarea name="Comments" rows="30" cols="47"> write here</textarea></label><br>
        
    
        
            
            <input type="submit" value="submit" name="submit">
            <input type="submit" value="cancel" name="cancel">
       
     </center>
    </form>
</div>

            
