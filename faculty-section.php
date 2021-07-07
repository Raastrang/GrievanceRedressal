<?php include './head-section.php'; ?>
<div><button style="float: right; margin-right: 1px ;margin-top: 1px; padding-right:px; padding-top: 2px;font-size: 16px; text-decoration: none;"id="backbutton"><a href="head.php" style="text-decoration: none;color:black;"><strong>Back</strong></a></button></div>

<?php
session_start();
include './dbconnection2.php';
if (isset($_POST['submit'])){
$username=$_POST['username'];
$Password=$_POST['password'];
$result = $mysqli->query("SELECT * FROM facultyragistration WHERE Email='$username' && Password='$Password' ");
// get the records from the database
$rowcount=mysqli_num_rows($result);
if($rowcount==true)
{
    {
}
  $_SESSION['xyz']=$username;
   header("location:facultycommentsection.php");
   
    }

else{

echo "your wrong";}
}
?>
        <div class="loginbox">
            <image src="./image/faculty.png" class="student"/>
            <h1>Faculty Login</h1>
            <form method="post" action="">
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter password">
                <input type="submit" name="submit" value="Login">
                <a href="#">Forget your password?</a><br>
                <a href="facultyragistration2.php">Don't  have an account?</a>
                
            </form>
        </div>
    
          