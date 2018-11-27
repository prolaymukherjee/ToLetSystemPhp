<?php 
 session_start();
 $db = mysqli_connect("localhost","root","","login");
 
 if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from log where user='".$uname."'AND Pass='".$password."' ";
    $result=mysqli_query($db,$sql);
	
	 if(mysqli_num_rows($result)==1){
        echo "<script>window.location.assign('admin.php');</script>";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
 
 }
 
?>



<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login Page for Admin</title>
		<link rel="stylesheet" href="login.css">
	</head>
	<body>
		<div class="loginBox">
			<img src="user.png" class="user">
			<h2>Log In Here</h2>
			<form method="POST" action="admin.php">
				<p>Email</p>
				<input type="text" name="username" placeholder="Enter Email">
				<p>Password</p>
				<input type="password" name="password" placeholder="••••••">
				<a href="admin.php"><input type="submit" name="submit" value="Sign In"></a>
				<a href="#">Forget Password</a>
			</form>
		</div>
	</body>
</html>
