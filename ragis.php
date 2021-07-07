<?php
mysql_connect("localhost","root","");
mysql_select_db("college");
if (isset($_REQUESt['submit'])){
$username=$_REQUEST['username'];
$Password=$_REQUEST['password'];
$result = $mysql_query("SELECT * FROM studentragistration1 WHERE RollNo='$username' && Password='$Password' ");
// get the records from the database
$rowcount=mysql_num_rows($result);
if($rowcount==true)
{
   echo "your right";
   
}

else{

echo "your wrong";
}
}
?>
<p>Username</p>
                <input type="text" name="username" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter password">
                <input type="submit" name="submit" value="Login">