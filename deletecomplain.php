<?php

// connect to the database
include('./dbconnection2.php');

// confirm that the 'id' variable has been set
if (isset($_GET['RollNo']))
{
// get the 'id' variable from the URL
$RollNo = $_GET['RollNo'];
$sql="DELETE FROM studentcomments WHERE userid = $RollNo";

// delete record from database
	if ($mysqli->query($sql)!==true)
	{
	echo "ERROR: could not prepare SQL statement.";
	}
$mysqli->close();

// redirect user after delete is successful
header("Location: showcomplain.php");
}
else
// if the 'id' variable isn't set, redirect the user
{
header("Location: showcomplain.php");
}

?>