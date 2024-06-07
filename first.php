<?php

if(isset($_POST["name"])){
$server = "localhost";
$username = "root";
$password = "";
$con  = mysqli_connect($server,$username,$password);
if(!$con){
    die("Connection failed");
}else{
   echo " ";
}
$username = $_POST['username'];
        $email = $_POST['email'];
        $name = $_POST['name'];
        $password = $_POST['password'];
       
      //write your own database name `database name` and your table name `tablename`
 $sql = "INSERT INTO `realstate`.`register1` (`username`, `email`, `name`, `password`) VALUES ('$username', '$email','$name','$password');";
    if($con->query($sql)){
      echo "<script>alert('Submitted successfully')</script>";
      }else{
        echo "ERROR: $sql";
      }
      $con->close();
    }
?>

<!DOCTYPE html>
<html> 
<head> 


    <title>sign up form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style_.css">
    <style>
        body{
            background-image:url(reaak.webp);
        }
    </style>
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
	
	<li><a href="#h">CONTACT</a></li>
      </ul>
    </div>
	
   <div id="login-box">
     <div class="left">
        <h1>SIGN UP</h1>
		<form action="" method="post" enctype="multipart/form-data"> 
        <input type="text" name="username" placeholder="username">
   	<input type="text" name="email" placeholder="email">
	<input type="text" name="name" placeholder="name">
	<input type="password" name="password" placeholder="password">


        <input type="submit" name="btn"value="sign me up">
		<br><br><a href="login.php">Already Register Login</a><br>
     </div>
    
   </div>
</body>
</html>