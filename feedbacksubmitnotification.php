<!DOCTYPE html>
<html>
<head>

<style>
.alert {
  padding: 20px;
  background-color: cyan;
  color: black;
  margin: 6%;
}

.closebtn {
  margin-left: 15px;
  color: red;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
</head>
<body>
    <div><button style="float: right; margin-right: 1px ;margin-top: 1px; padding-right:px; padding-top: 2px;font-size: 16px; text-decoration: none;"id="backbutton"><a href="cellresponce.php" style="text-decoration: none;color:black;"><strong>Back</strong></a></button></div>

<center>
<h2>Alert Message</h2>
</center>
<div class="alert">
    <span class="closebtn">&times;</span> 
  <strong> Feedback submitted successfully!</strong> 
</div>

</body>
</html>