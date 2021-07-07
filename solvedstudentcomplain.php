<?php include 'head-section.php';?>

<?php
// connect to the database
include('./dbconnection2.php');
//$_rl=$_GET['RollNo'];
$result = $mysqli->query("SELECT * FROM feedback");
// get the records from the database
if ($result)
{
// display records if there are records to display
	if ($result->num_rows > 0)
	{
            $i=0;
	// display records in a table
	echo "<table  class='border' border=2px cellpadding=5px>";
        echo "<tr ><th colspan=3> All solved complain</th></tr>";
		// set table headers
	echo "<tr><th>SNO</th><th>RollNO</th><th>Complain</th><th>Feedback</th></tr>";

		while ($row = $result->fetch_object())
		{
                    $i++;
		// set up a row for each record
		echo "<tr>";
		echo "<td>" . $i . "</td>";
                echo "<td>" . $row->RollNo . "</td>";
                echo "<td></td>";
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