<html>
<head>
<title>View Records</title>
</head>
<body>
<h1>View Records</h1>

<p><b>View All</b></p>

<?php
// connect to the database
include('../dbconnection2.php');
$result = $mysqli->query("SELECT * FROM studentragistration1 ");
// get the records from the database
if ($result)
{
// display records if there are records to display
	if ($result->num_rows > 0)
	{
	// display records in a table
	echo "<table>";

		// set table headers
	echo "<tr><th>RollNO</th><th>Complain</th><th>Feedback</th></tr>";

		while ($row = $result->fetch_object())
		{
		// set up a row for each record
		echo "<tr>";
		//echo "<td>" . $row->FirstName . "</td>";
		//echo "<td>" . $row->LastName . "</td>";
                echo "<td>" . $row->RollNo . "</td>";
                echo "<td>" . $row->Complain . "</td>";
               // echo "<td>" . $row->Feedback . "</td>";
                
                echo "<td> <a href='cellresponce.php?RollNo=".$row->RollNo."'> Feedback </a> </td>";
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