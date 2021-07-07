<?php include 'head-section.php';?>
<?php
echo "<div id=sessionstart>";

session_start();
echo"welcome to ".$_SESSION['xyz']."<br>";
echo "</div>";
?>
<a href="faculty-section.php" >logout</a>
<?php
// connect to the database
include('./dbconnection2.php');
$_rl=$_GET['RollNo'];
$result = $mysqli->query("SELECT * FROM feedback where RollNo='$_rl'");
// get the records from the database
if ($result)
{
// display records if there are records to display
	if ($result->num_rows > 0)
	{
	// display records in a table
	echo "<table cellspacing=5px>";

		// set table headers
                echo "<tr><th colspan=2>Complain Status</th></tr>";
	echo "<tr><th>RollNO</th><th>Feedback</th></tr>";

		while ($row = $result->fetch_object())
		{
		// set up a row for each record
		echo "<tr>";
		//echo "<td>" . $row->FirstName . "</td>";
		//echo "<td>" . $row->LastName . "</td>";
                echo "<td>" . $row->RollNo . "</td>";
                echo "<td>" . $row->Feedback . "</td>";
               // echo "<td>" . $row->Feedback . "</td>";
                
               // echo "<td> <a href='cellresponce.php?RollNo=".$row->RollNo."'> Feedback </a> </td>";
                //echo "<td> <a href='editrecored.php?RollNo=".$row->RollNo."'> Edit </a> </td>";


		echo "</tr>";
		}

	echo "</table>";
	}
	// if there are no records in the database, display an alert message
	else
	{
	echo "No results to display!";
	}
}
// show an error if there is an issue with the database query
else
{
echo "Error: " . $mysqli->error;
}
// close database connection
$mysqli->close();

?>

</body>
</html>