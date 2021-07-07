<style>
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
