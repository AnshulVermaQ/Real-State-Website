<?php
session_start();
include("connection.php");

if(isset($_POST['btn'])) {
    $u = $_POST['username'];
    $pass = $_POST['password'];

    
    if(empty($u) || empty($pass)){
        header('Location: index.php?error=username and password are required');
        exit; 
    }
	
    mysqli_select_db($con, "realstate");
		
    $sql = "SELECT * FROM register1 WHERE username='$u' AND password='$pass'";
    $cq = mysqli_query($con, $sql);
    if(mysqli_num_rows($cq) === 1) {
        $_SESSION['email'] = $u;
        header('Location: index.php');
        exit;
    } else {
        echo "<script>alert('Incorrect login details! Username or password')</script>";
    }
    
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Login form</title>
<link rel="stylesheet" type="text/css" href="style_1.css">
<link rel="stylesheet" type="text/css" href="style_.css">
<style>
        body{
            background-image:url(reaak2.jpg);
        }
    </style>
</head>
<body>
<div class="main">
     
      <ul>
        <li class="active"><a href="index.php">HOME</a></li>
        <li><a href="first.php">SIGN UP</a></li>
        <li><a href="login.php">LOGIN</a></li>
	
	<li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
<div class="box">
<img src="user.png" class="avatar">
<h1>Login here</h1>
<form action="" method="post" enctype="multipart/form-data"> 
<input type="text" name="username"placeholder="Enter username">
<input type="password" name="password"placeholder="Enter password">
<input type="submit" name="btn"value="Login">
<a href="#">Forgot password</a>
<br><br><a href="first.php">Not Registered Sign Up First </a><br>
 </form>
</div>
</body>
</html>