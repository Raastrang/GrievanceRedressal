<head>
<script>
function validation(){
			var Fname=document.getElementById("Fuser").value;
                        var Lname=document.getElementById("Luser").value;
                       
			var password=document.getElementById("pass").value;
			var confpassword=document.getElementById("confpass").value;
                        var e=document.getElementById("EMAIL").value;
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
include "./dbconnection2.php";
if (isset($_POST['submit']))
{
// get the form data
$Fname = $_POST['Fname']; 
$Lname = $_POST['Lname'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Mobile = $_POST['Mobile'];

$sql="INSERT INTO facultyragistration (FirstName, LastName,Email,Password,Mobile) VALUES ('$Fname','$Lname','$Email','$Password','$Mobile')";
		if ($mysqli->query($sql)!==true)
		{
		echo "ERROR: Could not prepare SQL statement.";
		}
 else {
    header("location:rgsubmitnotification.php");
 
// redirec the user
//header("Location: rgsubmitnotification.php");
//header("refresh: ; url=showrecored.php");
}
}
// close the mysqli connection
$mysqli->close();
?>

	<style>
                   .main-form{
    margin-bottom: 100px;
    width: 320px;
    height: 350px;
    background: none;
    color:black;
   float: left;
   display: block;
    padding: 40px;
    border: 1px solid black;
    border-radius: 20px ;
}
            input{
                padding: 10px;
                padding-left: 5px;
                border: 2px black solid;
                border-radius: 5px;
                    
            }
            #pass{
                padding: 10px;
                padding-left: 5px;
                border: 2px black solid;
                border-radius: 5px;
                width: 180px;
                background: #ffffff;
            }
            #pass1{
                padding: 10px;
                padding-left: 5px;
                border: 2px black solid;
                border-radius: 5px;
                width: 180px;
                background: #ffffff;
            }
       
            table{
                               padding:5px;           }
           
            #submit{
               padding-left:  80px;
               
            }
      
           
            label{
                font-style:initial;
                font-size: 23px;
            }
               

	</style>
	        <html>
    <head>
        <link href="stylesheet/headstyle.css" type="text/css" rel="stylesheet"/> 
       
        

        
        
    </head>
    <body class="bg-image">
        <div class="body-content">
            <!--heading Section-->
            <div class="heading">
                <div class="logo"><img src="image/1234.png" width="151" height="145" class="mono"></div>
                <div class="logo-txt"><h1> Government Polytechnic College, Harda </h1>
                    <h6 class="website"> Website : <a href="https://www.gpcharda.ac.in">https://www.gpcharda.ac.in/</a> </h6>
                    <div class="grp"><h2>Grievance Redressal Portal</h2></div>
                </div>
                <div class="space">
                    
                </div>
            </div>                       

		<div class="main-form">
                   	
                    <form action="" onsubmit="return validation()"  oncancel=" mainpage.php" method="post" >
    			<div class="form-group">
                            
                            <table>
                                <tr><td colspan="3"><h2>FACULTY REGISTRATION</h2></td></tr>	
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
                        <td><label>Email:</label></td><td><input type="text" name="Email" id="EMAIL" placeholder="Enter your Email">
                        </tr>
                        <tr><td></td>
                            <td>
                            <span id="Email"></span>
                            </td>
                        </tr>
                        <tr>
                            
                                  
					
                            <td><label>Password:</label></td><td><input type="password" name="Password" id="pass" placeholder="Enter the Password"/></td>
				
                        </tr>
                         <tr><td></td>
                            <td>
                            <span id="Password"></span>
                            </td>
                        </tr>
                        
                        <tr>
                            
				
					
                            <td><label>ConfPassword:</label></td><td><input type="password" name="ConfPassword" id="pass1" placeholder="Enter the ConfPassword"/></td>
					
                           
                        </tr>
                         <tr><td></td>
                            <td>
                            <span id="Confpass"></span>
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
	