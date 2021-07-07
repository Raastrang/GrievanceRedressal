<?php include './head-section.php';?>
<?php
session_start();

include './dbconnection2.php';

if (isset($_POST['submit'])){
$username=$_POST['username'];
$Password=$_POST['password'];
$result = $mysqli->query("SELECT * FROM studentragistration1 WHERE RollNo='$username' && Password='$Password' ");
// get the records from the database
$rowcount=mysqli_num_rows($result);
if($rowcount==true)
{
    {
}
 $_SESSION['xyz']=$username;
   header("location:commentsection.php");
   
    }

else{

echo "your wrong";}
}

?>
<div><button style="float: right; margin-right: 1px ;margin-top: 3px; padding-right:px; padding-top: 2px;font-size: 16px; text-decoration: none;"id="backbutton"><a href="head.php" style="text-decoration: none;color:black;"><strong>Back</strong></a></button></div>

        <div class="loginbox">
            <image src="./image/student.png" class="student"/>
            <h1>Student Login</h1>
            <form method="post">
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter password">
                <input type="submit" name="submit" value="Login">
                <a href="#">Forget your password?</a><br>
                <a href="studentragistrationform2.php">Don't  have an account?</a>
                
            </form>
        </div>
    
          
    
