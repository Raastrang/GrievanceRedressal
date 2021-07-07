<head>
<script>
function validation(){
			var Fname=document.getElementById("Fuser").value;
                        var Lname=document.getElementById("Luser").value;
                        var RollNo=document.getElementById("rollno").value;

                         var Branch=document.getElementById("bh").value;
                        var semester=document.getElementById("sem").value;
			var password=document.getElementById("pass").value;
			var confpassword=document.getElementById("confpass").value;
                        var e=document.getElementById("email").value;
			var mobileNo=document.getElementById("mobile").value;
			
			if(Fname===""){
				document.getElementById("Fname").innerHTML="**Please fill the First name field";
                       return false;
			}
			if(Fname.length<2 ||Fname.length>20){
				document.getElementById("Fname").innerHTML="**First name field must be between 2 to 20 character.";
                       return false;
			}
			if(!isNaN(Fname)){
				document.getElementById("Fname").innerHTML="**First name field must be character value";
                       return false;
			}
                        
			if(Lname==""){
				document.getElementById("Lname").innerHTML="**Please fill the Last name field";
                       return false;
			}
			if(Lname.length<2 ||Lname.length>20){
				document.getElementById("Lname").innerHTML="**Last name field must be between 2 to 20 character.";
                       return false;
			}
			if(!isNaN(Lname)){
				document.getElementById("Lname").innerHTML="**Last name field must be character value";
                       return false;
			}
                        if(RollNo==""){
				document.getElementById("Rn").innerHTML="**Please fill the Roll Number field";
                       return false;
			}
                        
                        if(Branch===""){
                            document.getElementById("Branch").innerHTML="** please fill the Branch field";
                            return false;
                        }
                        if(semester===""){
                            document.getElementById("Semester").innerHTML="** please fill the semester field";
                            return false;
                        }
                    
			
		        if(password===""){
				document.getElementById("Pass").innerHTML="**Please fill the Password field";
                       return false;
			}
			if(password.length<=5 || password.length>20){
				document.getElementById("Pass").innerHTML="**Password must be between 6 to 20 character";
                       return false;
			}
			
			
			if(confpassword===""){
				document.getElementById("Confpass").innerHTML="**Please fill the confpassword field";
                       return false;
			}
			if(confpassword.length<=5 || confpassword.length>20){
				document.getElementById("Confpass").innerHTML="**Password must be between 6 to 20 character";
                       return false;
			}
			if(password!=confpassword){
				document.getElementById("Confpass").innerHTML="**Password not matched";
                       return false;
			}
                        if(e===""){
				document.getElementById("Email").innerHTML="**Please fill the Email field";
                       return false;
			}
			if(e.indexOf("@")<=0){
                            document.getElementById("Email").innerHTML="**Invalid @ position";
                            return false;
                        }
                        if((e.charAt(e.length-4)!=".")&&(e.charAt(e.length-3)!=".")){
                          document.getElementById("Email").innerHTML="**Invalid . position";
                                 return false;

                        }
			
			if(mobileNo===""){
				document.getElementById("Mobile").innerHTML="**Please fill the Mobile Number field";
                       return false;
			}
			if(isNaN(mobileNo)){
               document.getElementById("Mobile").innerHTML="** Mobile Number Only Digit allowed";
                 return false;
				 }
      		 if(mobileNo.length!==10){
               document.getElementById("Mobile").innerHTML="**Mobile Number should be 10 digit";
                  return false;
                     }
                     
	  
	  
	  }
	</script>
</head>


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

	<style>
                        .main-form{

                display: block;
                margin: 5px;
                padding: 5px;
                border-radius: 5px;

            }
            .form-group{
                padding: 5px;
                text-align: center;
                                border: 2px black solid;
                border-radius: 15px;
                

            }
            input{
                padding: 10px;
                border: 2px black solid;
                border-radius: 5px;
                    
            }
            table{
                padding-left:35%;

                 
            }
           
            #submit{
               padding-left:  80px;
               
            }
      
            h1{
                padding-left: 37%;
            }
            label{
                font-style:initial;
                font-size: 23px;
            }

           
        
               

	</style>
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
	