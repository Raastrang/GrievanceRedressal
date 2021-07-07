
<?php
session_start();

// server info
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'college';

// connect to the database
$mysqli = new mysqli($server, $user, $pass, $db);

if($mysqli->connect_error){
    echo $mysqli->connect_error;
}

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
        <div class="loginbox">
            <image src="../image/student.png" class="student"/>
            <h1>Student Login</h1>
            <form method="post">
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter password">
                <input type="submit" name="submit" value="Login">
                <a href="#">Forget your password?</a><br>
                <a href="stdsignupform.html">Don't  have an account?</a>
                
            </form>
        </div>