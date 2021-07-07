<?php include 'head-section.php';?>
<div><button style="float: right; margin-right: 1px ;margin-top: 1px; padding-right:px; padding-top: 2px;font-size: 16px; text-decoration: none;"id="backbutton"><a href="cellmember.php" style="text-decoration: none;color:black;"><strong>Back</strong></a></button></div>

<?php
session_start();
include './dbconnection2.php';

if (isset($_POST['submit'])){
$username=$_POST['username'];
$Password=$_POST['password'];
$result = $mysqli->query("SELECT * FROM cellmember WHERE ID='$username' && Password='$Password' ");
// get the records from the database
$rowcount=mysqli_num_rows($result);
if($rowcount==true)
{
    {
}
   $_SESSION['xyz']=$username;
   echo"<br>";
   echo "<table cellspacing=10 cellpadding=5>";
   echo "<tr>";
   echo "<td>";
  echo " <a href='showcomplain.php' id=studentcomplain> Student Complain</a><br>";
  echo "</td>";
  echo "</tr>";
  echo "<tr>";
   echo "<td id=showfacultycomplain>";
  echo " <a href='showfacultycomplain.php'> Faculty Complain</a><br>";
  echo "</td>";
  echo "</tr>";
  echo "<tr>";
   echo "<td>";
  echo " <a href='solvedstudentcomplain.php' id=solvedcomplain> Solved Complain</a>";
  echo "</td>";
  echo "</tr>";
  echo "</table>";
  //header("location:showfacultycomplain.php");
 //echo "<a href="showfacultycomplain.php">faculty</a>";
   
    }

else{

echo "your wrong";}
}

?>
