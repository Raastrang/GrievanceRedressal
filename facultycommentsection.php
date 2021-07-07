<?php include 'head-section.php';?>
<div><button style="float: right; margin-right: 1px ;margin-top: 1px; padding-right:px; padding-top: 2px;font-size: 16px; text-decoration: none;"id="backbutton"><a href="faculty-section.php" style="text-decoration: none;color:black;"><strong>Back</strong></a></button></div>

<?php 
echo "<div id=sess>";

session_start();
echo"welcome to ".$_SESSION['xyz']."<br>";

echo "</div>";
?>
<a href="faculty-section.php" ><button id="butt">logout</button></a>
<head> <link href="stylesheet/commentstyle.css"></head>
<?php
$userTest=$_SESSION['xyz'];
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
$sql="INSERT INTO facultycomments (userid,complain) VALUES ('$userTest','$Comments')";
		if ($mysqli->query($sql)!==true)
		{
		echo "ERROR: Could not prepare SQL statement.";
		}
 else {
                     header("location:submitnotification.php");

 }
// redirec the user
//header("Location: showrecored.php");
//header("refresh: ; url=showrecored.php");
}
// close the mysqli connection
$mysqli->close();


echo "<div>";
echo '<form class="com" method="post" action="#">';
    
    echo'<label> <br> <textarea name="Comments" rows="20" cols="40" id="textarea"> write here</textarea></label><br>';
        echo'<input type="submit"  id="submit" value="submit" name="submit">';
        echo'<input type="button" id="cancel" value="cancel" name="cancel">';
        echo'<a href="facultycomplainstatus.php?RollNo='.$_SESSION['xyz'].'">Complain status</a>';
    echo'</form>';
echo'</div>';
