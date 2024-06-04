<?php
include("connect.php");
error_reporting(0);
if(isset($_POST['btn']))
{
  $un = $_POST['username'];
  $e = $_POST['email'];
  $n = $_POST['name'];
  $p = $_POST['password'];
	$q = "insert into reg(username,email,name,pass) values('$un','$e','$n','$p')";
	$cq = mysqli_query($con,$q);
	
	if($cq)
	{
echo "<script>alert('Saved Successfully')</script>";
	}
	else
	{
		echo "<script>alert('Failed')</script>";
	}
}


?>

<!DOCTYPE html>
<html> 
<head> 


    <title>sign up form</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style_.css">
</head>
<body>

<div class="main">
     <div class="logo">
      <br>
	  
     </div>
      <ul>
        <li class="active"><a href="index.php">HOME</a></li>
        <li><a href="first.php">SIGN UP</a></li>
        <li><a href="login.php">LOGIN</a></li>
	
	<li><a href="contact.php">CONTACT</a></li>
      </ul>
    </div>
	
   <div id="login-box">
     <div class="left">
        <h2> Address:- </h2> <br><br>
		 <h2> Mobile No:- </h2> <br><br>
		
     </div>
    
   </div>
</body>
</html>