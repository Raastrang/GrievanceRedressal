<?php include 'head-section.php'?>
<div><button style="float: right; margin-right: 1px ;margin-top: 1px; padding-right:px; padding-top: 2px;font-size: 16px; text-decoration: none;"id="backbutton"><a href="selectcomp.php" style="text-decoration: none;color:black;"><strong>Back</strong></a></button></div>


<?php
// connect to the database
include('./dbconnection2.php');
$result = $mysqli->query("SELECT * FROM facultycomments ");
// get the records from the database
if ($result)
{
// display records if there are records to display
	if ($result->num_rows > 0)
	{
	// display records in a table
	echo "<table cellpadding=5 cellspacing=10>";

		// set table headers
	echo "<tr><th>Email</th><th>Complain</th><th>Feedback</th></tr>";

		while ($row = $result->fetch_object())
		{
		// set up a row for each record
		echo "<tr>";
		//echo "<td>" . $row->FirstName . "</td>";
		//echo "<td>" . $row->LastName . "</td>";
                echo "<td>" . $row->userid . "</td>";
                echo "<td>" . $row->complain . "</td>";
               // echo "<td>" . $row->Feedback . "</td>";
                
                echo "<td> <a href='cellresponce.php?RollNo=".$row->userid."'> Feedback </a> </td>";
                echo "<td> <a href='deletefacultycomplain.php?RollNo=".$row->userid."'> Delete </a> </td>";


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