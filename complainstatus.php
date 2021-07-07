<html>
<head>
<title>Student Complain</title>
</head>
<body>
    <div><button style="float: right; margin-right: 1px ; margin-right: 6%; margin-top: 1px; padding-right:px; padding-top: 2px;font-size: 16px; text-decoration: none;"id="backbutton"><a href="commentsection.php" style="text-decoration: none;color:black;"><strong>Back</strong></a></button></div>

<?php include 'head-section.php'?>

<?php
echo "<div id='session'>";

session_start();
echo"welcome to ".$_SESSION['xyz']."<br>";
echo"</div>"

?>
    <a href="student-section.php" ><button id="butt">logout</button></a>
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
	echo "<table class='cmst' cellspacing=8px  style=margin-top:7%>";
        echo "<tr><th colspan=3 style='font-size: 20px'>Student complain<th></tr>";
		// set table headers
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