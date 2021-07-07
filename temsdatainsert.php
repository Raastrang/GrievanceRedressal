<?php
include "./dbconnection.php";
if (isset($_POST['submit']))
{
// get the form data
$Fname = $_POST['Fname']; 
$Lname = $_POST['Lname'];
$RollNo = $_POST['RollNo'];
$Branch = $_POST['Branch'];
$Semester = $_POST['Semester'];
$Password = $_POST['Password'];
$Email = $_POST['Email'];
$Mobile = $_POST['Mobile'];

$sql="INSERT INTO studentragistration1 (FirstName, LastName,RollNo,Branch,Semester,Password,Email,Mobile) VALUES ('$Fname','$Lname','$RollNo','$Branch','$Semester','$Password','$Email','$Mobile')";
		if ($mysqli->query($sql)!==true)
		{
		echo "ERROR: Could not prepare SQL statement.";
		}
// redirec the user
//header("Location: showrecored.php");
//header("refresh: ; url=showrecored.php");
}
// close the mysqli connection
$mysqli->close();
?>



	                                <h1>Student Ragistration Form</h1>	

		<div class="main-form">
                   	
                    <form action="" onsubmit="return validation()"  oncancel=" mainpage.php" method="post" >
    			<div class="form-group">
                            
                            <table>
                                <tr>
                                    
                                    <td><label>First name:</label></td><td><input type="text" name="Fname" id="Fuser" placeholder="Enter the First name"/></td>
                                </tr>
                                 <tr><td></td>
                            <td>
                            <span id="Fname"></span>
                            </td>
                        </tr>
                                <tr>
                                    
                                    <td><label>Last name:</label></td><td><input type="text" name="Lname" id="Luser" placeholder="Enter the Last name"/></td>
                           </tr>
                            <tr><td></td>
                            <td>
                            <span id="Lname"></span>
                            </td>
                        </tr>
                        <tr>
                                    
                                    <td><label>RollNo:</label></td><td><input type="text" name="RollNo" id="rollno" placeholder="Enter your Roll number"/></td>
                                </tr>
                                 <tr><td></td>
                            <td>
                            <span id="Rn"></span>
                            </td>
                        </tr>
                        
			
                        <tr>
                            
				
                            <td> <label>Branch:</td><td></label><input type="text" name="Branch" id="bh" placeholder="Branch"/></td>
                           
                        </tr>
                         <tr><td></td>
                            <td>
                            <span id="Branch"></span>
                            </td>
                        </tr>
                        <tr>
                            
                                
                            <td><label>Semester:</label></td><td><input type="text" name="Semester" id="sem" placeholder="semester"/></td>
                            
                        </tr>
                         <tr><td></td>
                            <td>
                            <span id="Semester"></span>
                            </td>
                        </tr>
                        <tr>
                            
                                  
					
                            <td><label>Password:</label></td><td><input type="text" name="Password" id="pass" placeholder="Enter the Password"/></td>
				
                        </tr>
                         <tr><td></td>
                            <td>
                            <span id="Password"></span>
                            </td>
                        </tr>
                        
                        <tr>
                            
				
					
                            <td><label>ConfPassword:</label></td><td><input type="text" name="ConfPassword" id="confpass" placeholder="Enter the ConfPassword"/></td>
					
                           
                        </tr>
                         <tr><td></td>
                            <td>
                            <span id="Confpass"></span>
                            </td>
                        </tr>
                        <tr>
                        <td><label>Email:</label></td><td><input type="text" name="Email" id="email" placeholder="Enter your Email">
                        </tr>
                        <tr><td></td>
                            <td>
                            <span id="Email"></span>
                            </td>
                        </tr>
                        <tr>
                            
				
					
                            <td><label>Mobile:</label></td><td><input type="text" name="Mobile" id="mobile" placeholder="Enter the Mobile Number"/></td>
			
                            
                        </tr>
                         <tr><td></td>
                            <td>
                            <span id="Mobile"></span>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
				<input type="submit" name="submit" value="Submit" />
                                

                            </td>
                            
                        </tr>
		
</table>
                            
                        </form>
		</div>
	